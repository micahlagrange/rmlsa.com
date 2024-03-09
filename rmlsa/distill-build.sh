#!/bin/bash

set -e

git pull

python3 \
    manage.py \
	distill-local \
	--force \
	--collectstatic

