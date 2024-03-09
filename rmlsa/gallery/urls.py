__author__ = 'micah'
from django.conf.urls import url
from . import views

urlpatterns = [
    '',
    url(r'^$', views.gallery_pictures, name='index'),
    url(r'^pictures/$', views.gallery_pictures, name='pictures'),
    url(r'^upload/$', views.upload_image, name='upload_image'),
    url(r'^upload_success/(?P<filename>.+)/$',
        views.upload_success, name='upload_success'),
    url(r'^delete/(?P<pk>\d+)/$', views.delete_image, name='delete'),
    url(r'^delete_success/$', views.delete_success, name='delete_success'),

    # Video archive
    url(r'^videos/archive/(?P<year>\d+)/$', views.video_archive, name='videos'),
    url(r'^videos/archive/index/$', views.video_archive_index,
        name='video_archive_index'),

    # Picture archive
    url(r'^pictures/archive/(?P<year>\d+)/$',
        views.picture_archive, name='picture_archive'),
    url(r'^pictures/archive/index/$', views.picture_archive_index,
        name='picture_archive_index'),
]
