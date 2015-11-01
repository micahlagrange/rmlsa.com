#!/bin/bash

set -e

PROJECT_HOME="/Users/lg_micaht/rmlsa.com/"
TARGET=ubuntu@rmlsa.com
DEPLOY_FROM="/usr/local/rmlsa.com/working_dir/deploy_from"

cd $PROJECT_HOME
   
echo Copying...
rsync -rv rmlsa $DEPLOY_FROM

cd $DEPLOY_FROM

echo Removing old archive...
if [ -e rmlsa.zip ]; then
    rm rmlsa.zip
fi

echo Zipping up archive...
zip -r rmlsa.zip rmlsa

echo Sending archive to production server $TARGET
scp -i ../rmlsa-site.pem rmlsa.zip $TARGET:/home/ubuntu/django_deploy

echo Done sending archive
