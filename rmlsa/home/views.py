from functools import reduce

__author__ = 'MicahT'

import forms
from rmlsa import settings

from datetime import datetime, timedelta

from django.shortcuts import render, HttpResponseRedirect
from django.urls import reverse
from django.contrib.auth.views import LogoutView
from django.contrib.auth.decorators import login_required, permission_required

from home.models import *
from events.models import *
from gallery.models import *
from news.models import *

# Stupid django query stuff:

import operator
from django.db.models import Q


def get_random_image():
    try:
        random_image = GalleryImage.objects.order_by('?')[0]
    except IndexError:
        return None
    return random_image


def get_partner_links():
    partners = []
    try:
        partner_m_objs = PartnerSite.objects.all()
        for p in partner_m_objs:
            fn = p.image.name.split('/')
            partners.append(
                dict(
                    partner=p,
                    filename=fn[-1],
                )
            )
    except IndexError:
        return None
    return partners


def gallery_admin(request):
    return render(request, 'home/gallery_admin.html', {'random_image': get_random_image(),
                                                       'partners': get_partner_links()})


def logout(request):
    LogoutView.as_view(request, next_page='/')
    return HttpResponseRedirect(reverse(home))


def home(request):
    winners = False
    datetimestamp = datetime.now()

    # Get up to 5 past non-practice events
    past_events = Event.objects.reverse().filter(date__lt=datetimestamp).exclude(
        event_type__name__contains='practice')[0:5]

    # Get up to 5 future non-practice events
    upcoming_events = Event.objects.filter(date__gte=datetimestamp)[0:5]

    for event in past_events:
        if event.winner:
            # If there is at least 1 winner, add the winner column in html (see template)
            winners = True

    welcome_message = WelcomeMessage.objects.latest('date_modified')
    return render(request, 'home/home.html', {'home': 'active', 'random_image': get_random_image(),
                                              'welcome_message': welcome_message, 'partners': get_partner_links(),
                                              'rmlsa_events': upcoming_events, 'past_events': past_events,
                                              'winners': winners, 'news_articles': get_all_news_articles()})


def race_results(request):
    return render(request, 'home/race_results.html', {'results': 'active', 'random_image': get_random_image(),
                                                      'partners': get_partner_links()})


def info(request):
    welcome_message = WelcomeMessage.objects.latest('date_modified')
    return render(request, 'home/info.html', {'info': 'active', 'random_image': get_random_image(),
                                              'welcome_message': welcome_message, 'partners': get_partner_links()})


def schedule(request):
    events = Event.objects.all()
    return render(request, 'home/schedule.html', {'info': 'active', 'events': events,
                                                  'random_image': get_random_image(), 'partners': get_partner_links()})


def get_all_news_articles():
    articles = Article.objects.all()
    return articles


def base_tc(tab=None):
    """
    The base template always needs this context
    :return: base context for base template
    """

    if tab:
        status = 'active'
    else:
        tab = 'all_tabs'
        status = 'inactive'

    template_context = {tab: status, 'random_image': get_random_image(), 'partners': get_partner_links(),
                        'news_articles': get_all_news_articles()}

    return template_context


def point_standings(request):
    return render(request, 'home/2014_point_standings.html', base_tc('info'))


def getting_started(request):
    return render(request, 'home/getting_started.html', {'getting_started': 'active',
                                                         'random_image': get_random_image(),
                                                         'partners': get_partner_links()})


def rules(request):
    rules_obj = RulesFile.objects.all()
    return render(request, 'home/rules.html', {'info': 'active',
                                               'random_image': get_random_image(),
                                               'partners': get_partner_links(),
                                               'rules': reversed(list(rules_obj))})


def membership_application(request):
    membership_form = MembershipApplication.objects.last()
    return render(request, 'home/membership.html', {'info': 'membership_form',
                                                    'random_image': get_random_image(),
                                                    'partners': get_partner_links(),
                                                    'membership_form': membership_form})


def web_links(request):
    links = {}
    for link in WebLink.objects.all():
        category = link.category.name
        try:
            links[category].append({'url': link.url, 'name': link.name})
        except KeyError:
            links[category] = []
            links[category].append({'url': link.url, 'name': link.name})

    return render(request, 'home/web_links.html', {'links': links, 'random_image': get_random_image(),
                                                   'info': 'active', 'partners': get_partner_links()})


@login_required
@permission_required('home.delete_partner', raise_exception=True)
def delete_partner(request, pk):
    partner = PartnerSite.objects.get(pk=pk)

    if request.method == 'POST' and 'is_submitted' in request.POST:
        form = forms.DeleteModel(request.POST)
        if form.is_valid():
            partnername = partner.name
            partner.delete()
            return render(request, 'home/delete_partner_success.html', {'partnername': partnername})
        else:
            raise ValueError(form)

    else:
        form = forms.DeleteModel(initial={'is_submitted': '1'})

    return render(request, 'home/delete_partner_form.html', {'partner': partner, 'form': form})


def server_error_custom(request):
    return render(request, 'errors/500.html', {'error', 'There has been a server error. '
                                                        'The admins have been notified.'})


def get_500_error():
    raise ValueError('Here is your error, sir.')
