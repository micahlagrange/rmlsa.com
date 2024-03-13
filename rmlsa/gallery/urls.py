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
    distill_path('pictures/archive_2011/',
                 views.picture_archive_2011,
                 name='picture_archive_2011'),
    distill_path('pictures/archive_2012/',
                 views.picture_archive_2012,
                 name='picture_archive_2012'),
    distill_path('pictures/archive_2013/',
                 views.picture_archive_2013,
                 name='picture_archive_2013'),
    distill_path('pictures/archive/index/',
                 views.picture_archive_index,
                 name='picture_archive_index'),
]
