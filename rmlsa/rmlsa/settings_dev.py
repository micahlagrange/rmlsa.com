__author__ = 'micah'

import os
from pathlib import Path
import platform

print("LOADING DEV SETTINGS")

BASE_DIR = Path(__file__).resolve().parent.parent

DEBUG = TEMPLATE_DEBUG = True
DEBUG_PROPAGATE_EXCEPTIONS = False


def is_windows():
    return platform.system() == 'Windows'


win_root = os.getenv('APPDATA') + '/rmlsa'
dev_root = '/opt/rmlsa/' if not is_windows() else win_root

dev_db_path = dev_root + '/sqlite/django.db'
dev_static_dir = dev_root + '/static/'
log_file = dev_root + '/logging/rmlsa.log'

# db, media, static dirs
DATABASES = {
    'default': {
        'ENGINE': 'django.db.backends.sqlite3',
        'NAME': dev_db_path,
        'USER': '',
        'PASSWORD': '',
        'HOST': '',
        'PORT': ''
    }
}


MEDIA_ROOT = dev_root + '/media'
STATIC_URL = '/static/'
MEDIA_URL = '/media/'

if os.getenv('STATIC'):
    STATIC_ROOT = '/opt/rmlsa/static'  # it's ok that it isn't windowsy

# Static files dirs setting requires not having static root
STATICFILES_DIRS = (
    os.path.join(BASE_DIR.parent, 'static', 'home', 'static'),
    dev_static_dir,
    "../static/")

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
            'filename': log_file,
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
