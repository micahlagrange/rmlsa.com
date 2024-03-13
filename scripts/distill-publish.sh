#!/bin/bash
#

set -e

# python3 \
# 	./manage.py \
# 	distill-publish

aws s3 sync /opt/rmlsa/build/ s3://distill-staging/

echo "visit the page: http://distill-staging.s3-website-us-east-1.amazonaws.com"
echo "Staging URL: https://dvuh0qlj8uj57.cloudfront.net"

