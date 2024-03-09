from django.conf import settings
from django.conf.urls.static import static
from django.conf.urls import include, path
from django.contrib import admin
from django.contrib.staticfiles.urls import staticfiles_urlpatterns
from django.contrib.auth.views import login as django_login, logout as django_logout
from django.views.generic import TemplateView
from django.shortcuts import render

import gallery.views
import gallery.urls
import home.views
import home.urls
import events.views
import events.urls
import profiles.views
import profiles.urls
import search.urls
import classifieds.urls

from django_distill import distill_path

urlpatterns = [
    '',  # Root redirect:
    distill_path('', home.views.home, name='home'),
    distill_path('', TemplateView.as_view(
        template_name='homepage.html'), name="home"),

    # Apps
    path('', include(home.urls, namespace='home')),
    path('gallery/', include(gallery.urls, namespace='gallery')),
    path('profiles/', include(profiles.urls, namespace='profiles')),
    distill_path('profiles', profiles.views.driver_profile, name='p_anchor'),
    path('events/', include(events.urls, namespace='events')),
    path('search/', include(search.urls, namespace='search')),
    path('classifieds/', include(classifieds.urls, namespace='classifieds')),

    # Admin/login required:
    path('accounts/login/', django_login, name='login'),
    path('accounts/logout/', home.views.logout, name='logout'),
    path('admin/', include(admin.site.urls)),
]

if settings.DEBUG:
    urlpatterns += staticfiles_urlpatterns()
    urlpatterns += static(settings.MEDIA_URL,
                          document_root=settings.MEDIA_ROOT)


# Error overrides
# handler500 = 'home.views.server_error_custom'
