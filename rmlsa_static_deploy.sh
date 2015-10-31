#!/bin/bash

TARGET=ubuntu@rmlsa.com
IDFILE="/Users/lg_micaht/.ssh/rmlsa-site.pem"
REMOTEDIR="/export/home/projects/static/"
STATICROOT=""

# ssh -i "$IDFILE" "$TARGET" 'sudo chmod -R 777 /export/home/projects/static'
rsync -az -e "ssh -i $IDFILE" --no-o --no-p  "$TARGET":"$REMOTEDIR"
