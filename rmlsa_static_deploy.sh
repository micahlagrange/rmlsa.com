set -e

# Variables

TARGET_SRV=ubuntu@rmlsa.com
TARGET_DIR=/export/home/projects/static
PRV_KEY=/usr/local/rmlsa.com/working_dir/rmlsa-site.pem
STATIC_DIR=/Users/lg_micaht/rmlsa.com/static/

ssh -ti $PRV_KEY $TARGET_SRV "sudo chown -R ubuntu:ubuntu $TARGET_DIR"
rsync -avz -e "ssh -i $PRV_KEY" $STATIC_DIR $TARGET_SRV:$TARGET_DIR
ssh -ti $PRV_KEY $TARGET_SRV "sudo chown -R www-data:www-data $TARGET_DIR" 

