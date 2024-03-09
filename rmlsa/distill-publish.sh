#!/bin/bash
#

set -e

nice \
    python3 \
	./manage.py \
	distill-publish
