#!/bin/bash
#
# rmlsa.sh — control the rmlsa admin EC2 box and the static-site publish flow.
#
# Usage:
#   ./rmlsa.sh deploy       # full cycle: start -> [admin sync] -> publish -> promote -> stop
#   ./rmlsa.sh start        # ensure box running, ssh-config + DNS point at it, admin healthy
#   ./rmlsa.sh stop         # stop the instance
#   ./rmlsa.sh publish      # build static site + sync to staging S3 (runs on the box)
#   ./rmlsa.sh promote      # promote staging S3 -> prod bucket (prompts; runs on the box)
#   ./rmlsa.sh deploy-admin # sync git checkout -> /opt admin copy, migrate, restart gunicorn
#
# The box is normally STOPPED (no Elastic IP; started only to deploy). `deploy`
# runs the whole cycle and stops the box at the end (even on error), with
# verify gates. publish/promote require the box running. Prod-touching steps
# prompt for confirmation; set RMLSA_YES=1 to skip prompts in automation.
#
# `start` is idempotent: every step checks current state first and only acts
# when something actually differs, so re-running it on a warm box is a no-op.
#
# The instance has no Elastic IP, so its public IP changes on every start.
# `start` repoints BOTH the `Host <alias>` HostName in ~/.ssh/config AND the
# admin A record in Route53 to the new IP.
#
# Configuration is read from environment, auto-loaded from a gitignored .env
# file next to this script. See .env.example. Nothing account-specific is
# committed; AWS auth comes from your normal environment / ~/.aws.
#
set -euo pipefail

# --- load local config (gitignored) --------------------------------------
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
ENV_FILE="${RMLSA_ENV_FILE:-$SCRIPT_DIR/.env}"
if [[ -f "$ENV_FILE" ]]; then
  set -a; source "$ENV_FILE"; set +a
fi

INSTANCE_ID="${RMLSA_INSTANCE_ID:?set RMLSA_INSTANCE_ID (copy .env.example to .env and fill it in)}"
REGION="${RMLSA_REGION:-us-west-2}"
SSH_ALIAS="${RMLSA_SSH_ALIAS:-rmlsa}"
SSH_CONFIG="${RMLSA_SSH_CONFIG:-$HOME/.ssh/config}"
REMOTE_DIR="${RMLSA_REMOTE_DIR:-~/rmlsa.com}"
ADMIN_HOST="${RMLSA_ADMIN_HOST:-admin.rmlsa.com}"
HOSTED_ZONE_ID="${RMLSA_HOSTED_ZONE_ID:-}"   # empty => auto-resolve from domain
STAGING_URL="${RMLSA_STAGING_URL:-https://dvuh0qlj8uj57.cloudfront.net}"
PROD_URL="${RMLSA_PROD_URL:-https://rmlsa.com}"
DEPLOY_KEEP_RUNNING=0   # set by cmd_deploy; read by its EXIT trap

# Admin runs as gunicorn.service (systemd, user 'nginx') behind nginx, booted
# from /opt/rmlsa.com/rmlsa. It fails to start whenever /opt/rmlsa/logging is
# not group-writable by nginx, so fix perms first, then restart.
REMOTE_ADMIN_RELOAD="sudo chown -R ec2-user:nginx /opt/rmlsa/logging && sudo chmod 664 /opt/rmlsa/logging/* && sudo systemctl restart gunicorn"

_aws() { command aws --region "$REGION" "$@"; }

# --- instance helpers ----------------------------------------------------
instance_state() {
  _aws ec2 describe-instances --instance-ids "$INSTANCE_ID" \
    --query 'Reservations[0].Instances[0].State.Name' --output text
}
instance_ip() {
  _aws ec2 describe-instances --instance-ids "$INSTANCE_ID" \
    --query 'Reservations[0].Instances[0].PublicIpAddress' --output text
}

# --- ssh config (idempotent) ---------------------------------------------
update_ssh_config() {
  local ip="$1" current
  current=$(ssh -G "$SSH_ALIAS" 2>/dev/null | awk '/^hostname /{print $2; exit}')
  if [[ "$current" == "$ip" ]]; then
    echo "  ssh config: ${SSH_ALIAS} already -> $ip"
    return
  fi
  if [[ ! -f "$SSH_CONFIG" ]] || ! grep -qiE "^[[:space:]]*Host[[:space:]]+.*\b${SSH_ALIAS}\b" "$SSH_CONFIG"; then
    cat >&2 <<EOF
ERROR: no 'Host ${SSH_ALIAS}' block found in $SSH_CONFIG. Add one first, e.g.:
  Host ${SSH_ALIAS}
      HostName ${ip}
      User ec2-user
      IdentityFile ~/.ssh/rmlsa-site.pem
EOF
    exit 1
  fi
  cp "$SSH_CONFIG" "${SSH_CONFIG}.bak"
  awk -v alias="$SSH_ALIAS" -v ip="$ip" '
    /^[[:space:]]*[Hh]ost[[:space:]]+/ {
      in_block = 0
      for (i = 2; i <= NF; i++) if ($i == alias) in_block = 1
    }
    in_block && /^[[:space:]]*[Hh]ost[Nn]ame[[:space:]]+/ {
      match($0, /^[[:space:]]*/); indent = substr($0, 1, RLENGTH)
      print indent "HostName " ip
      next
    }
    { print }
  ' "${SSH_CONFIG}.bak" > "$SSH_CONFIG"
  echo "  ssh config: ${SSH_ALIAS} -> $ip (was ${current:-unset}; backup ${SSH_CONFIG}.bak)"
}

# --- Route53 (idempotent) ------------------------------------------------
hosted_zone_id() {
  if [[ -n "$HOSTED_ZONE_ID" ]]; then echo "$HOSTED_ZONE_ID"; return; fi
  local domain="${ADMIN_HOST#*.}"   # admin.rmlsa.com -> rmlsa.com
  _aws route53 list-hosted-zones-by-name --dns-name "$domain" \
    --query "HostedZones[?Name=='${domain}.'].Id | [0]" --output text \
    | sed 's#/hostedzone/##'
}
update_dns() {
  local ip="$1" zid current
  zid=$(hosted_zone_id)
  if [[ -z "$zid" || "$zid" == "None" ]]; then
    echo "ERROR: could not resolve Route53 hosted zone for ${ADMIN_HOST}." >&2
    exit 1
  fi
  current=$(_aws route53 list-resource-record-sets --hosted-zone-id "$zid" \
    --query "ResourceRecordSets[?Name=='${ADMIN_HOST}.' && Type=='A'].ResourceRecords[0].Value | [0]" \
    --output text)
  if [[ "$current" == "$ip" ]]; then
    echo "  dns: ${ADMIN_HOST} already -> $ip"
    return
  fi
  _aws route53 change-resource-record-sets --hosted-zone-id "$zid" --change-batch "$(cat <<EOF
{"Changes":[{"Action":"UPSERT","ResourceRecordSet":{"Name":"${ADMIN_HOST}.","Type":"A","TTL":300,"ResourceRecords":[{"Value":"${ip}"}]}}]}
EOF
  )" >/dev/null
  echo "  dns: ${ADMIN_HOST} -> $ip (was ${current:-none}; TTL 300)"
}

# --- ssh / admin health --------------------------------------------------
wait_for_ssh() {
  local i
  for i in $(seq 1 30); do
    if ssh -o StrictHostKeyChecking=accept-new -o ConnectTimeout=5 \
          -o BatchMode=yes "$SSH_ALIAS" true 2>/dev/null; then
      return 0
    fi
    sleep 5
  done
  echo "ERROR: ssh did not come up in time." >&2
  exit 1
}
admin_healthy() {
  ssh -o BatchMode=yes -o ConnectTimeout=5 "$SSH_ALIAS" \
    "systemctl is-active --quiet gunicorn && curl -sf -o /dev/null -H 'Host: ${ADMIN_HOST}' http://127.0.0.1/" \
    2>/dev/null
}
ensure_admin() {
  if admin_healthy; then
    echo "  admin: healthy (gunicorn up, serving 200)"
    return
  fi
  echo "  admin: unhealthy -> fixing log perms and restarting gunicorn"
  ssh "$SSH_ALIAS" "$REMOTE_ADMIN_RELOAD"
  if admin_healthy; then
    echo "  admin: now healthy"
  else
    echo "  admin: WARNING still not healthy — check 'journalctl -u gunicorn'." >&2
  fi
}

# --- command guards ------------------------------------------------------
require_running() {
  local state
  state=$(instance_state)
  if [[ "$state" != "running" ]]; then
    echo "ERROR: instance is '$state', not running. Run '$(basename "$0") start' first." >&2
    exit 1
  fi
}
confirm() {
  [[ "${RMLSA_YES:-}" == "1" ]] && return 0
  local ans
  read -rp "$1 [y/N] " ans || return 1   # non-tty / EOF -> abort
  [[ "$ans" == [yY] || "$ans" == [yY][eE][sS] ]]
}

# --- commands ------------------------------------------------------------
cmd_start() {
  local state ip started=0
  state=$(instance_state)
  if [[ "$state" == "running" ]]; then
    echo "instance: already running"
  else
    echo "instance: $state -> starting"
    [[ "$state" == "stopped" ]] && _aws ec2 start-instances --instance-ids "$INSTANCE_ID" >/dev/null
    _aws ec2 wait instance-running --instance-ids "$INSTANCE_ID"
    started=1
  fi

  ip=$(instance_ip)
  if [[ -z "$ip" || "$ip" == "None" ]]; then
    echo "ERROR: instance running but has no public IP." >&2; exit 1
  fi
  echo "instance: public IP $ip"

  update_ssh_config "$ip"
  update_dns "$ip"

  [[ "$started" == "1" ]] && wait_for_ssh

  # Refresh the build checkout (no-op when already current).
  ssh "$SSH_ALIAS" "cd $REMOTE_DIR && git pull --ff-only" || \
    echo "  repo: WARNING git pull did not fast-forward — check the box." >&2

  ensure_admin
  echo "done. admin: http://${ADMIN_HOST}"
}

cmd_stop() {
  local state
  state=$(instance_state)
  if [[ "$state" == "stopped" ]]; then
    echo "instance: already stopped"
    return
  fi
  echo "instance: $state -> stopping"
  _aws ec2 stop-instances --instance-ids "$INSTANCE_ID" >/dev/null
  _aws ec2 wait instance-stopped --instance-ids "$INSTANCE_ID"
  echo "instance: stopped"
}

# Workers (no guards/prompts) so both the discrete commands and the `deploy`
# orchestrator can reuse them without double-confirming.
_publish_remote() { ssh "$SSH_ALIAS" "cd $REMOTE_DIR && ./build-and-publish.sh"; }
_promote_remote() { ssh "$SSH_ALIAS" "cd $REMOTE_DIR && ./promote-prod.sh"; }

# Sync the git checkout (~/rmlsa.com/rmlsa) to the nginx-owned /opt copy that
# gunicorn serves, then migrate the shared prod DB and restart. No --delete, so
# stale files under /opt are left alone. Paths are box infrastructure, fixed.
_sync_admin_remote() {
  ssh "$SSH_ALIAS" bash -s <<'REMOTE'
set -euo pipefail
SRC=/home/ec2-user/rmlsa.com/rmlsa/
DST=/opt/rmlsa.com/rmlsa/
echo "  rsync $SRC -> $DST"
sudo rsync -a --exclude='.git' --exclude='__pycache__' --exclude='*.pyc' "$SRC" "$DST"
sudo chown -R nginx:nginx /opt/rmlsa.com/rmlsa
cd "$DST"
echo "  migrate (prod DB)"
sudo ADMIN_SERVER=true python3 manage.py migrate --noinput
echo "  collectstatic"
sudo ADMIN_SERVER=true python3 manage.py collectstatic --noinput >/dev/null
sudo chown -R ec2-user:nginx /opt/rmlsa/logging && sudo chmod 664 /opt/rmlsa/logging/*
sudo systemctl restart gunicorn
REMOTE
}

cmd_publish() {
  require_running
  echo "Building + publishing static site to staging ..."
  _publish_remote
}

cmd_promote() {
  require_running
  confirm "Promote staging -> PRODUCTION (${PROD_URL})?" || { echo "aborted."; exit 1; }
  echo "Promoting staging -> prod ..."
  _promote_remote
}

cmd_deploy_admin() {
  require_running
  confirm "Sync admin code -> /opt, migrate prod DB, restart gunicorn?" || { echo "aborted."; exit 1; }
  echo "Deploying admin code to /opt ..."
  _sync_admin_remote
  ensure_admin
}

# Full ephemeral-box cycle. Stops the box on exit (incl. errors) UNLESS you
# decline the promote, in which case it stays up so you can fix and re-run.
cmd_deploy() {
  trap 'if [[ "${DEPLOY_KEEP_RUNNING:-0}" == "1" ]]; then
          echo "box left RUNNING — stop with: $(basename "$0") stop";
        else cmd_stop; fi' EXIT

  cmd_start

  if confirm "Sync admin code to /opt (rsync + migrate + restart)?"; then
    _sync_admin_remote
    ensure_admin
  else
    echo "  admin sync skipped"
  fi

  echo "Publishing to staging ..."
  _publish_remote
  echo "Staging: ${STAGING_URL}"

  if ! confirm "Staging verified — promote to PRODUCTION (${PROD_URL})?"; then
    DEPLOY_KEEP_RUNNING=1
    echo "Not promoting. Fix, then re-run 'deploy' or 'publish'."
    return 0
  fi

  echo "Promoting to prod ..."
  _promote_remote
  echo "Prod: ${PROD_URL} (CloudFront invalidation may take a few minutes)."
  echo "The box is not needed to verify prod — stopping it now."
  # EXIT trap stops the box (DEPLOY_KEEP_RUNNING stays 0).
}

case "${1:-}" in
  deploy)       cmd_deploy ;;
  start)        cmd_start ;;
  stop)         cmd_stop ;;
  publish)      cmd_publish ;;
  promote)      cmd_promote ;;
  deploy-admin) cmd_deploy_admin ;;
  *)
    echo "Usage: $0 {deploy|start|stop|publish|promote|deploy-admin}" >&2
    exit 1
    ;;
esac
