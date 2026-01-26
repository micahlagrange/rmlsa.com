__author__ = 'micah'

import os
from pathlib import Path

print("LOADING STATIC SETTINGS")

BASE_DIR = Path(__file__).resolve().parent.parent

DEBUG = TEMPLATE_DEBUG = True
DEBUG_PROPAGATE_EXCEPTIONS = True

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

# Static files
STATIC_URL = '/static/'
MEDIA_URL = '/media/'

MEDIA_ROOT = '/opt/rmlsa/media'
STATIC_ROOT = '/opt/rmlsa/static'

STATICFILES_DIRS = [
    os.path.join(BASE_DIR.parent, 'static', 'home', 'static')
]

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
