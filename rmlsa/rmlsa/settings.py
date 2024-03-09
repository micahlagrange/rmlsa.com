"""
Django settings for rmlsa project.

For more information on this file, see
https://docs.djangoproject.com/en/1.7/topics/settings/

For the full list of settings and their values, see
https://docs.djangoproject.com/en/1.7/ref/settings/
"""

# Build paths inside the project like this: os.path.join(BASE_DIR, ...)
import os
import socket
from pathlib import Path

BASE_DIR = Path(__file__).resolve().parent.parent

if socket.gethostname() == 'Micahs-MacBook-Pro.local':
    from rmlsa.settings_dev import *
elif socket.gethostname() == 'ip-172-31-47-20':
    from rmlsa.settings_prod import *
elif socket.gethostname() == 'piserv':
    from rmlsa.settings_test import *
else:
    from rmlsa.settings_static import *


LOGIN_REDIRECT_URL = '/edit/index/'

# Quick-start development settings - unsuitable for production
# See https://docs.djangoproject.com/en/1.7/howto/deployment/checklist/

with open('/etc/rmlsa.com.conf/secretkey') as f:
    SECRET_KEY = f.read().strip()

# SECURITY WARNING: don't run with debug turned on in production!

TEMPLATES = [
    {
        'BACKEND': 'django.template.backends.django.DjangoTemplates',
        "DIRS": [BASE_DIR / "templates"],
        'APP_DIRS': False,
        'OPTIONS': {
            'context_processors': [
                # 'django.template.context_processors.debug',
                'django.template.context_processors.request',
                'django.contrib.auth.context_processors.auth',
                'django.contrib.messages.context_processors.messages',
            ],
        },
    }
]

STATICFILES_FINDERS = (
    'django.contrib.staticfiles.finders.FileSystemFinder',
    'django.contrib.staticfiles.finders.AppDirectoriesFinder',
)

ALLOWED_HOSTS = [
    'localhost',
    '127.0.0.1',
    'rmlsa.duckdns.org',
    'www.rmlsa.duckdns.org',
    'rmlsa.com',
    'www.rmlsa.com',
    '54.68.77.118',  # Elastic IP
]

INSTALLED_APPS = (
    'django.contrib.admin',
    'django.contrib.auth',
    'django.contrib.contenttypes',
    'django.contrib.sessions',
    'django.contrib.messages',
    'django.contrib.staticfiles',
    'django.contrib.humanize',
    'home',
    'gallery',
    'events',
    'profiles',
    'news',
    'classifieds',
    'django_distill'
)

if socket.gethostname() == 'ip-172-31-47-20':
    INSTALLED_APPS += ('mod_wsgi.server',)


MIDDLEWARE = (
    'django.contrib.sessions.middleware.SessionMiddleware',
    'django.middleware.common.CommonMiddleware',
    'django.middleware.csrf.CsrfViewMiddleware',
    'django.contrib.auth.middleware.AuthenticationMiddleware',
    'django.contrib.messages.middleware.MessageMiddleware',
    'django.middleware.clickjacking.XFrameOptionsMiddleware',
)

ROOT_URLCONF = 'rmlsa.urls'

WSGI_APPLICATION = 'rmlsa.wsgi.application'

# Internationalization
# https://docs.djangoproject.com/en/1.7/topics/i18n/

LANGUAGE_CODE = 'en-us'
TIME_ZONE = 'America/Denver'
USE_I18N = True
USE_L10N = True
USE_TZ = True


with open('/etc/rmlsa.com.conf/awskeys') as f:
    creds = f.readlines()
    aws_key_id = creds[0].strip()
    secret_key = creds[1].strip()

DISTILL_DIR = '/opt/rmlsa/build/'
DISTILL_PUBLISH = {
    'default': {
        'ENGINE': 'django_distill.backends.amazon_s3',
        'BUCKET': 'distill-staging',
        'PUBLIC_URL': 'http://distill-staging.s3-website-us-east-1.amazonaws.com/',
        'ACCESS_KEY_ID': aws_key_id,
        'SECRET_ACCESS_KEY': secret_key
    },
}
DISTILL_SKIP_ADMIN_DIRS = False

