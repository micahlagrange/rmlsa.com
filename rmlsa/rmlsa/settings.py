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

hostname = socket.gethostname()

print('GOT HOSTNAME ' + hostname)
if os.environ.get('DEVMODE'):
    from rmlsa.settings_dev import *
elif os.environ.get('ADMIN_SERVER'):
    from rmlsa.settings_prod import *
elif hostname == 'Micah-MBP':
    from rmlsa.settings_dev import *
elif hostname == 'ip-172-31-47-20':
    from rmlsa.settings_prod import *
elif hostname == 'piserv':
    from rmlsa.settings_test import *
else:
    from rmlsa.settings_static import *


LOGIN_REDIRECT_URL = '/edit/index/'

# Quick-start development settings - unsuitable for production
# See https://docs.djangoproject.com/en/1.7/howto/deployment/checklist/

SECRET_KEY_DIR = '/etc/rmlsa.com.conf/secretkey' if not platform.system(
) == 'Windows' else os.getenv('APPDATA') + '/rmlsa/secretkey'
with open(SECRET_KEY_DIR) as f:
    SECRET_KEY = f.read().strip()

# SECURITY WARNING: don't run with debug turned on in production!

TEMPLATES = [
    {
        'BACKEND': 'django.template.backends.django.DjangoTemplates',
        "DIRS": [BASE_DIR / "templates"],
        'APP_DIRS': True,
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
    'admin.rmlsa.com',
    'localhost',
    '127.0.0.1',
    'rmlsa.local'
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
    'django.contrib.auth.middleware.AuthenticationMiddleware',
    'django.contrib.messages.middleware.MessageMiddleware',
    'django.middleware.clickjacking.XFrameOptionsMiddleware',
    'django.middleware.common.CommonMiddleware',
    'django.middleware.csrf.CsrfViewMiddleware',
    'django.middleware.security.SecurityMiddleware',
)

SECURE_HSTS_SECONDS = 0

ROOT_URLCONF = 'rmlsa.urls'

WSGI_APPLICATION = 'rmlsa.wsgi.application'

LANGUAGE_CODE = 'en-us'
TIME_ZONE = 'America/Denver'
USE_I18N = True
USE_L10N = True
USE_TZ = True


DISTILL_DIR = '/opt/rmlsa/build/'
DISTILL_SKIP_ADMIN_DIRS = True

DEFAULT_AUTO_FIELD = 'django.db.models.BigAutoField'
