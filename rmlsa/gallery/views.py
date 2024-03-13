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


def video_archive(request, year):
    if year in (2012, 2013, 2014):
        return render(request, 'gallery/video_archive/{}_videos.html'.format(year),
                      {'videos': 'active', 'random_image': home.views.get_random_image(),
                       'partners': home.views.get_partner_links()})
    else:
        return HttpResponseRedirect(reverse('gallery:video_archive_index'))


def video_archive_index(request):
    return render(request, 'gallery/video_archive/index.html', {'videos': 'active',
                                                                'random_image': home.views.get_random_image(),
                                                                'partners': home.views.get_partner_links()})


def picture_archive(request, year):
    if year in (2011, 2012, 2013):
        return render(request, 'gallery/picture_archive/{} RMLSA Gallery.html'.format(year),
                      {'gallery': 'active', 'random_image': home.views.get_random_image(),
                       'partners': home.views.get_partner_links()})
    else:
        return HttpResponseRedirect(reverse('gallery:picture_archive_index'))


def picture_archive_index(request):
    return render(request, 'gallery/picture_archive/index.html',
                  {'gallery': 'active', 'random_image': home.views.get_random_image(),
                   'partners': home.views.get_partner_links()})
