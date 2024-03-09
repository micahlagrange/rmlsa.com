#!/bin/bash
#
set -e

cd rmlsa

# Build static site to /opt
../scripts/distill-build.sh

# Sync with s3
../scripts/distill-publish.sh

