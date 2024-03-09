__author__ = 'micah'
import os

DEBUG = TEMPLATE_DEBUG = True
DEBUG_PROPAGATE_EXCEPTIONS = True


with open('/etc/rmlsa.com.conf/db_password') as f:
    PASSWORD = f.read().strip()

# db, media, static dirs
DATABASES = {
    'default': {
        'NAME': 'django_db',
        'ENGINE': 'django.db.backends.mysql',
        'USER': 'root',
        'PASSWORD': PASSWORD,
        'OPTIONS': {
            'autocommit': True,
        },
    }
}

MEDIA_ROOT = '/data/media'

# Static files
STATIC_URL = '//rmlsa.com/static/'
MEDIA_URL = '//rmlsa.com/media/'

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
            'filename': '/data/logging/rmlsa.log',
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
