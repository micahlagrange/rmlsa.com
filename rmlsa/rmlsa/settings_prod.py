__author__ = 'micah'

DEBUG = TEMPLATE_DEBUG = False

DATABASE_DIR = '/export/home/projects/db'
MEDIA_ROOT = '/export/home/projects/media'

# Static files
STATIC_URL = 'http://rmlsa.com/static/'
MEDIA_URL = 'http://rmlsa.com/media/'

STATIC_ROOT = '/export/home/projects/static'

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
            'email_backend': 'django.core.mail.backends.smtp.EmailBackend',
        },
        'file': {
            'level': 'DEBUG',
            'class': 'logging.handlers.RotatingFileHandler',
            'filename': '/export/home/projects/logging/rmlsa.log',
            'maxBytes': 1024 * 1024 * 5,
            'backupCount': 10,
            'formatter': 'verbose',
        },
    },
    'loggers': {
        'django': {
            'handlers': ['file', 'mail_admins'],
            'level': 'WARNING',
            'propagate': True,
        },
        'basic_logger': {
            'handlers': ['file', 'mail_admins'],
            'level': 'DEBUG',
        },
    }
}