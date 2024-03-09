from django.conf import settings
from django.contrib import admin
from django.conf.urls.static import static
from django.urls import include, path
from django.contrib.staticfiles.urls import staticfiles_urlpatterns
from django.contrib.auth.views import LoginView
from django.views.generic import TemplateView

import home.views
import home.urls
import profiles.views
import profiles.urls

from django_distill import distill_path

urlpatterns = [
    distill_path('', home.views.home, name='home'),

    # Apps
    path('', include('home.urls', namespace='home')),
    path('gallery/', include('gallery.urls', namespace='gallery')),
    path('profiles/', include('profiles.urls', namespace='profiles')),
    distill_path('profiles', profiles.views.driver_profile, name='p_anchor'),
    path('search/', include('search.urls', namespace='search')),
    path('classifieds/', include('classifieds.urls', namespace='classifieds')),

    # Admin/login required:
    path('accounts/login/', LoginView.as_view(), name='login'),
    path('accounts/logout/', home.views.logout, name='logout'),
    path('admin/', admin.site.urls),
]

if settings.DEBUG:
    urlpatterns += staticfiles_urlpatterns()
    urlpatterns += static(settings.MEDIA_URL,
                          document_root=settings.MEDIA_ROOT)


# Error overrides
# handler500 = 'home.views.server_error_custom'
