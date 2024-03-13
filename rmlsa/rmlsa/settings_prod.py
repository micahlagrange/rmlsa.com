__author__ = 'micah'

DEBUG = TEMPLATE_DEBUG = False

print("LOADING PROD SETTINGS")

with open('/etc/rmlsa.com.conf/db_password') as f:
    PASSWORD = f.read().strip()

# db, media, static dirs
DATABASES = {
    'default': {
        'NAME': 'django_db',
        'ENGINE': 'mysql.connector.django',
        'USER': 'root',
        'PASSWORD': PASSWORD,
        'OPTIONS': {
            'autocommit': True,
        },
    }
}

MEDIA_ROOT = '/export/home/projects/media'

# Static files
STATIC_URL = '//rmlsa.com/static/'
MEDIA_URL = '//rmlsa.com/media/'

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

CSRF_COOKIE_SECURE = True
SESSION_COOKIE_SECURE = True
