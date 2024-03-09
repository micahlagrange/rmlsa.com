__author__ = 'micah'

from django.conf.urls import url

import classifieds.views

from django_distill import distill_url

urlpatterns = [
    '',
    distill_url(r'^$', classifieds.views.index, name='index'),
    url(r'^(?P<pk>[0-9]+)/$', classifieds.views.details, name='details')
]
