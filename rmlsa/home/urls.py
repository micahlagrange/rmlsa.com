from django.conf.urls import patterns, include
from django_distill import distill_url

import home.views
from profiles.views import driver_profile

urlpatterns = patterns(
    '',
    # Main page urls
    distill_url(r'^$', home.views.home, name='home'),
    # url(r'^race_results$', home.views.race_results, name='race_results'),
    distill_url(r'^driver_profile$', driver_profile, name='driver_profile'),
    distill_url(r'^info$', home.views.info, name='info'),
    distill_url(r'^schedule$', home.views.schedule, name='schedule'),
    # url(r'^getting_started$', home.views.getting_started, name='getting_started'),
    distill_url(r'^info/rules$', home.views.rules, name='rules'),
    distill_url(r'^web_links/$', home.views.web_links, name='web_links'),
    distill_url(r'^membership/$', home.views.membership_application, name='membership_form'),
    distill_url(r'^point_standings/$', home.views.point_standings, name='point_standings'),

    # Login required functions
    # distill_url(r'^edit/index/$', home.views.gallery_admin, name='gallery_admin'),
    # url(r'^delete/partner/(?P<pk>\d+)/$', home.views.delete_partner, name='delete_partner'),

    # Error 500 backdoor
    # url(r'^get/an/error/message/$', home.views.get_500_error)
)
