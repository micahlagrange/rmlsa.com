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

BASE_DIR = os.path.dirname(os.path.dirname(__file__))

if socket.gethostname() == 'Micahs-MacBook-Pro.local':
    from rmlsa.settings_dev import *
elif socket.gethostname() == 'ip-172-31-47-20':
    from rmlsa.settings_prod import *
elif socket.gethostname() == 'piserv':
    from rmlsa.settings_test import *
else:
    from rmlsa.settings_test import *


LOGIN_REDIRECT_URL = '/edit/index/'

# Quick-start development settings - unsuitable for production
# See https://docs.djangoproject.com/en/1.7/howto/deployment/checklist/

with open('/etc/rmlsa.com.conf/secretkey') as f:
    SECRET_KEY = f.read().strip()

# SECURITY WARNING: don't run with debug turned on in production!

TEMPLATE_DIRS = [
    os.path.join(BASE_DIR, 'templates'),
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
    # 'robots',
    'home',
    'gallery',
    'events',
    'profiles',
    'news',
    'classifieds',
)
if socket.gethostname() == 'ip-172-31-47-20':
    INSTALLED_APPS += ('mod_wsgi.server',)


MIDDLEWARE_CLASSES = (
    'django.contrib.sessions.middleware.SessionMiddleware',
    'django.middleware.common.CommonMiddleware',
    'django.middleware.csrf.CsrfViewMiddleware',
    'django.contrib.auth.middleware.AuthenticationMiddleware',
    'django.contrib.auth.middleware.SessionAuthenticationMiddleware',
    'django.contrib.messages.middleware.MessageMiddleware',
    'django.middleware.clickjacking.XFrameOptionsMiddleware',
)

ROOT_URLCONF = 'rmlsa.urls'

WSGI_APPLICATION = 'rmlsa.wsgi.application'

# Database
# https://docs.djangoproject.com/en/1.7/ref/settings/#databases

DATABASES = {
    'default': {
        'ENGINE': 'django.db.backends.sqlite3',
        'NAME': os.path.join(DATABASE_DIR, 'rmlsa_db.sqlite3'),
    },
}

# Internationalization
# https://docs.djangoproject.com/en/1.7/topics/i18n/

LANGUAGE_CODE = 'en-us'
TIME_ZONE = 'America/Denver'
USE_I18N = True
USE_L10N = True
USE_TZ = True

with open('/etc/rmlsa.com.conf/adminaddress') as af:
	with open('/etc/rmlsa.com.conf/contactaddress') as cf:
	    ADMINS = (('Micah', af.read().strip()),)
	    CONTACTS = (('Steve', cf.read().strip()), ('Micah', af.read().strip()))

EMAIL_HOST = 'smtp.gmail.com'
with open('/etc/rmlsa.com.conf/emailpassword') as f:
    EMAIL_HOST_PASSWORD = f.read().strip()
EMAIL_HOST_USER = 'rmlsa.site@gmail.com'
EMAIL_USE_TLS = True
EMAIL_PORT = 587
