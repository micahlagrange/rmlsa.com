__author__ = 'micah'

from django.conf.urls import re_path

import classifieds.views

from django_distill import distill_path

urlpatterns = [
    '',
    distill_path('', classifieds.views.index, name='index'),
    re_path(r'^(?P<pk>[0-9]+)/$', classifieds.views.details, name='details')
]
