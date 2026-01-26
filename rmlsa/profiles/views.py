from django.shortcuts import render
from django.template import RequestContext

from profiles.models import Driver, SprintCar
from home.views import get_partner_links, get_random_image


# Create your views here.


def driver_profile(request):
    # drivers = []

    # for driver in Driver.objects.all():
    #     cars = driver.sprintcar_set.all()
    #     profile = driver.profile_set.all()
    #     sponsors = driver.sponsors
    #     drivers.append({'driver': driver, 'profile': profile,
    #                     'cars': ', '.join(car.title() for car in cars),
    #                     'sponsors': sponsors})

    return render(request, 'profiles/driver_profile.html', {'driver_profile': 'active', 'drivers': Driver.objects.all(),
                                                            'partners': get_partner_links(),
                                                            'random_image': get_random_image()})


def point_standings(request):
    drivers = Driver.objects.all()
    return render(request, 'profiles/point_standings.html', {'point_standings': 'active', 'drivers': drivers,
                                                             'partners': get_partner_links(),
                                                             'random_image': get_random_image()})
