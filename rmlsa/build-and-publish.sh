#!/bin/bash
#
set -e


# Build static site to /opt
./distill-build.sh

# Sync with s3
./distill-publish.sh

