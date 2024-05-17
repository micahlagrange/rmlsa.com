__author__ = 'micah'

print("LOADING PROD SETTINGS")

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

CSRF_COOKIE_SECURE = True
CSRF_TRUSTED_ORIGINS = ['https://admin.rmlsa.com']
SESSION_COOKIE_SECURE = True
CSRF_USE_SESSIONS = True
