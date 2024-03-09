__author__ = 'micah'
from django.conf.urls import path, re_path
from . import views

# TODO: use distill here

urlpatterns = [
    '',
    path('', views.gallery_pictures, name='index'),
    path('pictures/', views.gallery_pictures, name='pictures'),
    path('upload/', views.upload_image, name='upload_image'),
    re_path(r'^upload_success/(?P<filename>.+)/$',
            views.upload_success, name='upload_success'),
    re_path(r'^delete/(?P<pk>\d+)/$', views.delete_image, name='delete'),
    path('delete_success/', views.delete_success, name='delete_success'),

    # Video archive
    re_path(r'^videos/archive/(?P<year>\d+)/$',
            views.video_archive, name='videos'),
    path('videos/archive/index/', views.video_archive_index,
         name='video_archive_index'),

    # Picture archive
    re_path(r'^pictures/archive/(?P<year>\d+)/$',
            views.picture_archive, name='picture_archive'),
    path('pictures/archive/index/', views.picture_archive_index,
         name='picture_archive_index'),
]
