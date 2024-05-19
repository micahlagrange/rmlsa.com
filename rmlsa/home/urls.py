import home.views
from profiles.views import driver_profile

from django.urls import path, re_path

from django_distill import distill_path

app_name = 'home'
urlpatterns = [
    # Main page urls
    distill_path('', home.views.home, name='home'),
    distill_path('driver_profile/', driver_profile, name='driver_profile'),
    distill_path('info/', home.views.info, name='info'),
    distill_path('schedule/', home.views.schedule, name='schedule'),
    distill_path('info/rules/', home.views.rules, name='rules'),
    distill_path('web_links/', home.views.web_links, name='web_links'),
    distill_path('membership/', home.views.membership_application,
                 name='membership_form'),
    distill_path('point_standings/', home.views.point_standings,
                 name='point_standings'),
    distill_path('articles/page/<int:page>/',
                 home.views.list_articles,
                 name='news_articles',
                 distill_func=home.views.distill_get_articles),

    # Login required functions
    path('edit/index/', home.views.gallery_admin, name='gallery_admin'),
    re_path('^delete/parter/(?P<pk>\d+)/$',
            home.views.delete_partner, name='delete_partner'),
]
