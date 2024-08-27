#!/bin/bash

STAGING_BUCKET=distill-staging
PROD_BUCKET=rmlsa-prod
DISTRIB_ID=$(cat /etc/rmlsa.com.conf/prod_distrib)

# Sync files from staging to prod
output=$(aws --profile prod s3 sync s3://${STAGING_BUCKET}/ s3://${PROD_BUCKET}/)

# Extract the paths of the changed files
paths=$(echo "$output" | grep -oP 'copy: s3://.*staging/\K.*(?= to s3://rmlsa-prod)')

# Create an array to hold the paths
declare -a path_array

# Add each path to the array
for path in $paths; do
    path_array+=("/$path")
done

# Convert the array to a space-separated string
path_string="${path_array[*]}"

if [ -z "$path_string" ]
then
    echo "No paths to invalidate, clearing everyrthing"
    path_string='/*'
else
    echo "path_string is NOT empty"
    echo "Invalidating cache"
fi

aws --profile prod \
cloudfront \
create-invalidation \
--distribution-id ${DISTRIB_ID} \
--paths "${path_string}"
