#!/bin/bash

STAGING_BUCKET=distill-staging
PROD_BUCKET=rmlsa-prod
DISTRIB_ID=$(cat /etc/rmlsa.com.conf/prod_distrib)

# Sync files from staging to prod
aws --profile prod s3 sync s3://${STAGING_BUCKET}/ s3://${PROD_BUCKET}/

# Create CloudFront invalidation
aws --profile prod \
cloudfront \
create-invalidation \
--distribution-id "${DISTRIB_ID}" \
--paths '/*'
