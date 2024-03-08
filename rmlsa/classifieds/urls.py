__author__ = 'micah'

from django.conf.urls import patterns, include

import classifieds.views

from django_distill import distill_url

urlpatterns = patterns(
    '',
    distill_url(r'^$', classifieds.views.index, name='index'),
    distill_url(r'^(?P<pk>[0-9]+)/$', classifieds.views.details, name='details')
)