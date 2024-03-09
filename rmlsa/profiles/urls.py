from django.utils import timezone

__author__ = 'micah'

import profiles.views

from django_distill import distill_path

app_name = 'profiles'
urlpatterns = [
    '',
    # Profile urls
    distill_path('', profiles.views.driver_profile, name='index'),
    distill_path('standings/'.format(timezone.now().year),
                 profiles.views.point_standings, name='standings')
]
