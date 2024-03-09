__author__ = 'micah'
import os

DEBUG = TEMPLATE_DEBUG = True
DEBUG_PROPAGATE_EXCEPTIONS = True


with open('/etc/rmlsa.com.conf/db_password') as f:
    PASSWORD = f.read().strip()

# db, media, static dirs
DATABASES = {
    'default': {
        'ENGINE': 'django.db.backends.sqlite3',
        'NAME': '/opt/rmlsa/sqlite/django.db',
        'USER': '',
        'PASSWORD': '',
        'HOST': '',
        'PORT': ''
    }
}

MEDIA_ROOT = '/opt/rmlsa/media'

# Static files
STATIC_URL = 'http://distill-staging.s3-website-us-east-1.amazonaws.com/static/'
MEDIA_URL = 'http://distill-staging.s3-website-us-east-1.amazonaws.com/media/'

STATIC_ROOT = '/opt/rmlsa/static'

LOGGING = {
    'version': 1,
    'disable_existing_loggers': False,
    'formatters': {
        'verbose': {
            'format': "[%(asctime)s] %(levelname)s [%(name)s:%(lineno)s] %(message)s",
            'datefmt': "%d-%b-%Y %H:%M:%S",
        },
    },
    'handlers': {
        'file': {
            'level': 'DEBUG',
            'class': 'logging.handlers.RotatingFileHandler',
            'filename': '/opt/rmlsa/logging/rmlsa.log',
            'maxBytes': 1024 * 1024 * 5,
            'backupCount': 10,
            'formatter': 'verbose',
        },
    },
    'loggers': {
        'django': {
            'handlers': ['file'],
            'level': 'DEBUG',
            'propagate': True,
        },
        'basic_logger': {
            'handlers': ['file'],
            'level': 'DEBUG',
        },
    }
}
