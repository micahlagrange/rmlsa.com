from django.utils import timezone

__author__ = 'micah'

from django.conf.urls import patterns, include, url

import profiles.views

urlpatterns = patterns(
    '',
    # Profile urls
    url(r'^$', profiles.views.driver_profile, name='index'),
    url(r'^standings/$'.format(timezone.now().year), profiles.views.point_standings, name='standings')
)