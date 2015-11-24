__author__ = 'micah'
import os

DEBUG = TEMPLATE_DEBUG = True

# Database
# https://docs.djangoproject.com/en/1.7/ref/settings/#databases

DATABASE_DIR = '/usr/local/rmlsa.com/db'
DATABASES = {
    'default': {
        'ENGINE': 'django.db.backends.sqlite3',
        'NAME': os.path.join(DATABASE_DIR, 'rmlsa_db.sqlite3'),
    },
}

#STATIC_ROOT = '/usr/local/rmlsa.com/static'
MEDIA_ROOT = '/usr/local/rmlsa.com/media'

# Static files
STATICFILES_DIRS = ('/Users/lg_micaht/rmlsa.com/static/',)
STATIC_URL='/static/'
MEDIA_URL='/media/'

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
        'mail_admins': {
            'level': 'ERROR',
            'class': 'django.utils.log.AdminEmailHandler',
            'include_html': True,
        },
        'file': {
            'level': 'DEBUG',
            'class': 'logging.handlers.RotatingFileHandler',
            'filename': '/usr/local/rmlsa.com/logging/rmlsa.log',
            'maxBytes': 1024 * 1024 * 5,
            'backupCount': 10,
            'formatter': 'verbose',
        },
    },
    'loggers': {
        'django': {
            'handlers': ['file'],
            'level': 'WARNING',
            'propagate': True,
        },
        'basic_logger': {
            'handlers': ['file'],
            'level': 'DEBUG',
        },
    }
}
