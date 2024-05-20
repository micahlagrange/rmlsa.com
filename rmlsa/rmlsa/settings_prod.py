__author__ = 'micah'

import os
from pathlib import Path

print("LOADING PROD SETTINGS")

BASE_DIR = Path(__file__).resolve().parent.parent

DEBUG = TEMPLATE_DEBUG = False

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

STATIC_ROOT = '/opt/rmlsa/static'
MEDIA_ROOT = '/opt/rmlsa/media'

STATICFILES_DIRS = [
    os.path.join(BASE_DIR.parent, 'static', 'home', 'static')
]

SERVER_EMAIL = 'rmlsa.site@gmail.com'

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
        "console": {
            "level": "INFO",
            "class": "logging.StreamHandler",
            "formatter": "simple",
        },
        "mail_admins": {
            "level": "ERROR",
            "class": "django.utils.log.AdminEmailHandler",
        },
        'file': {
            'level': 'INFO',
            'class': 'logging.handlers.RotatingFileHandler',
            'filename': '/opt/rmlsa/logging/rmlsa.log',
            'maxBytes': 1024 * 1024 * 5,
            'backupCount': 10,
            'formatter': 'verbose',
        },
    },
    'loggers': {
        "django.request": {
            "handlers": ["mail_admins"],
            "level": "ERROR",
            "propagate": False,
        },
        'django': {
            'handlers': ['file'],
            'level': 'INFO',
            'propagate': True,
        },
        'basic_logger': {
            'handlers': ['file'],
            'level': 'INFO',
        },
        "django": {
            "handlers": ["console"],
            "propagate": True,
        },
    }
}

CSRF_COOKIE_SECURE = True
CSRF_TRUSTED_ORIGINS = ['https://admin.rmlsa.com']
SESSION_COOKIE_SECURE = True
CSRF_USE_SESSIONS = True
