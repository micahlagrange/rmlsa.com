#!/bin/bash
#
set -e

sudo chown -R ec2-user:nginx /opt/rmlsa/logging
sudo chown -R ec2-user:nginx /opt/rmlsa/logging/*
sudo chmod 664 /opt/rmlsa/logging/*

cd ~/rmlsa.com/rmlsa

# Build static site to /opt
../scripts/distill-build.sh

# Sync with s3
../scripts/distill-publish.sh

aws cloudfront create-invalidation --distribution-id $(cat /etc/rmlsa.com.conf/cloudfront_distrib) --paths '/*'
