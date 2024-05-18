__author__ = 'micah'

import os
import platform

print("LOADING DEV SETTINGS")

DEBUG = TEMPLATE_DEBUG = True
DEBUG_PROPAGATE_EXCEPTIONS = False


def is_windows():
    return platform.system() == 'Windows'


WINROOT = os.getenv('APPDATA') + '/rmlsa'
DEV_ROOT = '/opt/rmlsa/' if not is_windows() else WINROOT

DEV_DB_PATH = DEV_ROOT + '/sqlite/django.db'
DEV_STATIC_DIR = DEV_ROOT + '/static/'
LOG_FILE = DEV_ROOT + '/logging/rmlsa.log'

# db, media, static dirs
DATABASES = {
    'default': {
        'ENGINE': 'django.db.backends.sqlite3',
        'NAME': DEV_DB_PATH,
        'USER': '',
        'PASSWORD': '',
        'HOST': '',
        'PORT': ''
    }
}


# Static files dirs setting requires not having static root
STATICFILES_DIRS = (DEV_STATIC_DIR, '../static/')
MEDIA_ROOT = DEV_ROOT + '/media'
STATIC_URL = '/static/'
MEDIA_URL = '/media/'

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
            'level': 'INFO',
            'class': 'logging.handlers.RotatingFileHandler',
            'filename': LOG_FILE,
            'maxBytes': 1024 * 1024 * 5,
            'backupCount': 10,
            'formatter': 'verbose',
        },
    },
    'loggers': {
        'django': {
            'handlers': ['file'],
            'level': 'INFO',
            'propagate': True,
        },
        'basic_logger': {
            'handlers': ['file'],
            'level': 'INFO',
        },
    }
}

CSRF_COOKIE_SECURE = False
