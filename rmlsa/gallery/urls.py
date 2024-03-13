__author__ = 'micah'
from . import views

from django_distill import distill_path

app_name = 'gallery'
urlpatterns = [
    distill_path('',
                 views.gallery_pictures,
                 name='index'),
    distill_path('pictures/',
                 views.gallery_pictures,
                 name='pictures'),
    # Video archive
    distill_path('videos/archive/index/',
                 views.video_archive_index,
                 name='video_archive_index'),
    # Picture archive
    distill_path('pictures/archive/<int:year>/',
                 views.picture_archive,
                 name='picture_archive',
                 distill_file="pictures/archive/{year}"),
    distill_path('pictures/archive/index/',
                 views.picture_archive_index,
                 name='picture_archive_index'),
]
