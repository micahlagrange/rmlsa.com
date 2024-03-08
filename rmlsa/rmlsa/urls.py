from django.conf import settings
from django.conf.urls.static import static
from django.conf.urls import patterns, include, url
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

from django_distill import distill_url

urlpatterns = patterns(
    '',  # Root redirect:
    distill_url(r'^$', home.views.home, name='home'),
    distill_url(r'^$', TemplateView.as_view(template_name='homepage.html'), name="home"),

    # Apps
    url(r'', include(home.urls, namespace='home')),
    distill_url(r'^gallery/', include(gallery.urls, namespace='gallery')),
    distill_url(r'^profiles/', include(profiles.urls, namespace='profiles')),
    distill_url(r'^profiles', profiles.views.driver_profile, name='p_anchor'),
    distill_url(r'^events/', include(events.urls, namespace='events')),
    distill_url(r'^search/', include(search.urls, namespace='search')),
    distill_url(r'^classifieds/', include(classifieds.urls, namespace='classifieds')),

    # Admin/login required:
    url(r'^accounts/login/$', django_login, name='login'),
    url(r'^accounts/logout/$', home.views.logout, name='logout'),
    url(r'^admin/', include(admin.site.urls)),
)

if settings.DEBUG:
    urlpatterns += staticfiles_urlpatterns()
    urlpatterns += static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)


# Error overrides
# handler500 = 'home.views.server_error_custom'
