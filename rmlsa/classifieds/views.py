from django.http import HttpResponse
from django.shortcuts import render, get_object_or_404
from django.utils import timezone

from classifieds.models import Ad

# Create your views here.
from home.views import get_partner_links, get_random_image


def index(request):
    datetimestamp = timezone.now()

    ads = Ad.objects.filter(date__lt=datetimestamp)[:50]

    return render(request, 'classifieds/index.html', {'ads': ads, 'partners': get_partner_links(),
                                                      'random_image': get_random_image()})


def details(request, pk):
    ad = get_object_or_404(Ad, pk=pk)
    return render(request, 'classifieds/details.html', {'ad': ad, 'partners': get_partner_links(),
                                                        'random_image': get_random_image()})
