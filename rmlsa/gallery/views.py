from django.contrib.auth.decorators import login_required, permission_required
from django.shortcuts import render, HttpResponseRedirect
from django.urls import reverse
import forms

# Create your views here.
from gallery.models import GalleryImage
import home.views


@login_required
def upload_image(request):
    custom_errors = []

    if request.method == 'POST':
        if request.user.has_perm('gallery.upload_image'):
            form = forms.GalleryImageUploader(request.POST, request.FILES)
            if form.is_valid():
                form.save()
                filename = form.cleaned_data['name']
                return HttpResponseRedirect(reverse('gallery:upload_success', kwargs={'filename': filename}))
        else:
            custom_errors.append(
                'You do not have permission to upload images. Please contact the site administrator')
            return render(request, 'gallery/upload_image_form.html', {'custom_errors': custom_errors})
    else:
        if request.user.has_perm('gallery.upload_image'):
            form = forms.GalleryImageUploader()
        else:
            form = None
            custom_errors.append(
                'You do not have permission to upload images. Please contact the site administrator')

    return render(request, 'gallery/upload_image_form.html', {'form': form, 'custom_errors': custom_errors})


def delete_success(request):
    custom_success = ['The image has been deleted successfully']
    return render(request, 'gallery/delete_success.html', {'custom_success': custom_success})


def upload_success(request, filename):
    custom_success = ['{} has been uploaded successfully'.format(filename)]
    context = home.views.base_tc('gallery')
    context.update({'custom_success': custom_success})
    return render(request, 'gallery/upload_success.html', context)


def delete_image(request, pk):
    image = GalleryImage.objects.get(pk=pk)
    custom_errors = []

    if request.method == 'POST' and 'is_submitted' in request.POST:
        if request.user.has_perm('gallery.delete_image'):
            form = forms.DeleteModel(request.POST)
            if form.is_valid():
                image.delete()
                return HttpResponseRedirect(reverse('gallery:delete_success'))
            else:
                raise ValueError(form)
        else:
            custom_errors.append(
                'You do not have permission to edit this object.')
            return render(request, 'gallery/delete_confirmation.html', {'custom_errors': custom_errors})
    else:
        form = forms.DeleteModel(initial={'is_submitted': '1'})

    return render(request, 'gallery/delete_confirmation.html', {'image': image, 'form': form})


def gallery_pictures(request):
    all_images = GalleryImage.objects.all()
    return render(request, 'gallery/gallery_pictures.html', {'gallery': 'active', 'images': all_images,
                                                             'random_image': home.views.get_random_image(),
                                                             'partners': home.views.get_partner_links()})


def video_archive(request, year):
    if year in ('2012', '2013', '2014'):
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
    if year in ('2011', '2012', '2013'):  # '2007', '2008', '2009', '2010'
        return render(request, 'gallery/picture_archive/{} RMLSA Gallery.html'.format(year),
                      {'gallery': 'active', 'random_image': home.views.get_random_image(),
                       'partners': home.views.get_partner_links()})
    else:
        return HttpResponseRedirect(reverse('gallery:picture_archive_index'))


def picture_archive_index(request):
    return render(request, 'gallery/picture_archive/index.html',
                  {'gallery': 'active', 'random_image': home.views.get_random_image(),
                   'partners': home.views.get_partner_links()})
