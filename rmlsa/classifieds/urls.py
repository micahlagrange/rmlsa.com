__author__ = 'micah'

from django.conf.urls import patterns, include, url

import classifieds.views

urlpatterns = patterns(
    '',
    url(r'^$', classifieds.views.index, name='index'),
    url(r'^(?P<pk>[0-9]+)/$', classifieds.views.details, name='details')
)