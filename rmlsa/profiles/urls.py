from django.utils import timezone

__author__ = 'micah'

from django.conf.urls import patterns, include, url

import profiles.views

from django_distill import distill_url

urlpatterns = patterns(
    '',
    # Profile urls
    distill_url(r'^$', profiles.views.driver_profile, name='index'),
    distill_url(r'^standings/$'.format(timezone.now().year), profiles.views.point_standings, name='standings')
)