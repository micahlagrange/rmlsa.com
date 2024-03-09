#!/bin/bash

# Variables
DB_PATH="/data/sqlite/django.db"
BACKUP_PATH="/data/backups/"
S3_BUCKET="s3://rmlsa-django-backups"
DAYS_TO_KEEP=1460

# Create a timestamp
TIMESTAMP=$(/usr/bin/date +%Y%m%d%H%M%S)

# Backup the database
/usr/bin/cp $DB_PATH $BACKUP_PATH/sqlite_backup_$TIMESTAMP.db

# Upload to S3
/usr/bin/aws s3 cp $BACKUP_PATH/sqlite_backup_$TIMESTAMP.db $S3_BUCKET

# Delete local backups older than 90 days
/usr/bin/find $BACKUP_PATH/* -mtime +$DAYS_TO_KEEP -exec rm {} \;

# Delete S3 backups older than 90 days
/usr/bin/aws s3 ls $S3_BUCKET | while read -r line;
  do
    createDate=`echo $line|/usr/bin/awk {'print $1" "$2'}`
    createDate=`/usr/bin/date -d"$createDate" +%s`
    olderThan=`/usr/bin/date -d"-$DAYS_TO_KEEP days" +%s`
    if [[ $createDate -lt $olderThan ]]
      then 
        fileName=`echo $line|/usr/bin/awk {'print $4'}`
        if [[ $fileName != "" ]]
          then 
            /usr/bin/aws s3 rm $S3_BUCKET/$fileName
        fi
    fi
done

