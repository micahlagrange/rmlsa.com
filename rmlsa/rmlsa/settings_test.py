__author__ = 'micah'

DEBUG = TEMPLATE_DEBUG = True

DATABASE_DIR = '../..'
STATIC_ROOT = '../../home/static'
MEDIA_ROOT = '../../media'

# Static files
STATIC_URL = '/static/'
MEDIA_URL = '/media/'

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
            'filename': '/dir/django_projects/logging/rmlsa.log',
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
