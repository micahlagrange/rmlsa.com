import home.views
from profiles.views import driver_profile

from django_distill import distill_path

app_name = 'home'
urlpatterns = [
    # Main page urls
    distill_path('', home.views.home, name='home'),
    # url(r'^race_results$', home.views.race_results, name='race_results'),
    distill_path('driver_profile', driver_profile, name='driver_profile'),
    distill_path('info', home.views.info, name='info'),
    distill_path('schedule', home.views.schedule, name='schedule'),
    # url(r'^getting_started$', home.views.getting_started, name='getting_started'),
    distill_path('info/rules', home.views.rules, name='rules'),
    distill_path('web_links/', home.views.web_links, name='web_links'),
    distill_path('membership/', home.views.membership_application,
                 name='membership_form'),
    distill_path('point_standings/', home.views.point_standings,
                 name='point_standings'),

    # Login required functions
    # distill_url(r'^edit/index/$', home.views.gallery_admin, name='gallery_admin'),
    # url(r'^delete/partner/(?P<pk>\d+)/$', home.views.delete_partner, name='delete_partner'),

    # Error 500 backdoor
    # url(r'^get/an/error/message/$', home.views.get_500_error)
]
