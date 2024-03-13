from django.contrib.auth.decorators import login_required, permission_required
from django.shortcuts import render, HttpResponseRedirect
from django.urls import reverse
import forms

# Create your views here.
from gallery.models import GalleryImage
import home.views


def gallery_pictures(request):
    all_images = GalleryImage.objects.all()
    return render(request, 'gallery/gallery_pictures.html', {'gallery': 'active', 'images': all_images,
                                                             'random_image': home.views.get_random_image(),
                                                             'partners': home.views.get_partner_links()})


def video_archive_index(request):
    return render(request, 'gallery/video_archive/index.html', {'videos': 'active',
                                                                'random_image': home.views.get_random_image(),
                                                                'partners': home.views.get_partner_links()})


def picture_archive_for_year(request, year):
    return render(request, 'gallery/picture_archive/{} RMLSA Gallery.html'.format(year),
                  {'gallery': 'active', 'random_image': home.views.get_random_image(),
                   'partners': home.views.get_partner_links()})


def picture_archive_2011(request):
    return picture_archive_for_year(request, 2011)

def picture_archive_2012(request):
    return picture_archive_for_year(request, 2012)

def picture_archive_2013(request):
    return picture_archive_for_year(request, 2013)


def picture_archive_index(request):
    return render(request, 'gallery/picture_archive/index.html',
                  {'gallery': 'active', 'random_image': home.views.get_random_image(),
                   'partners': home.views.get_partner_links()})
