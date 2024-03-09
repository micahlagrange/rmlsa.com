#!/bin/bash
#

set -e

# python3 \
# 	./manage.py \
# 	distill-publish

aws s3 sync /opt/rmlsa/build/ s3://distill-staging/

