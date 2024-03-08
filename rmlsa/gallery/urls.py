__author__ = 'micah'
from django.conf.urls import patterns
from . import views

from django_distill import distill_url

urlpatterns = patterns(
    '',
    distill_url(r'^$', views.gallery_pictures, name='index'),
    distill_url(r'^pictures/$', views.gallery_pictures, name='pictures'),
    distill_url(r'^upload/$', views.upload_image, name='upload_image'),
    distill_url(r'^upload_success/(?P<filename>.+)/$', views.upload_success, name='upload_success'),
    distill_url(r'^delete/(?P<pk>\d+)/$', views.delete_image, name='delete'),
    distill_url(r'^delete_success/$', views.delete_success, name='delete_success'),

    # Video archive
    distill_url(r'^videos/archive/(?P<year>\d+)/$', views.video_archive, name='videos'),
    distill_url(r'^videos/archive/index/$', views.video_archive_index, name='video_archive_index'),

    # Picture archive
    distill_url(r'^pictures/archive/(?P<year>\d+)/$', views.picture_archive, name='picture_archive'),
    distill_url(r'^pictures/archive/index/$', views.picture_archive_index, name='picture_archive_index'),
)