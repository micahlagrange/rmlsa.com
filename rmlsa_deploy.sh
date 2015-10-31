#!/bin/bash

TARGET=ubuntu@rmlsa.com
IDFILE="/Users/lg_micaht/.ssh/rmlsa-site.pem"
DEPLOYFROM="/tmp/deploy_from"
REMOTEDIR="/home/ubuntu/django_deploy"

echo Copying without static/media...
mkdir "$DEPLOYFROM"
rsync -az rmlsa "$DEPLOYFROM"

cd "$DEPLOYFROM"

echo Zipping up archive...
tar cvzf rmlsa.tar.gz rmlsa

echo Sending archive to production server $TARGET
scp -i "$IDFILE" rmlsa.tar.gz $TARGET:"$REMOTEDIR"

echo Done sending archive
rm -r "$DEPLOYFROM"
