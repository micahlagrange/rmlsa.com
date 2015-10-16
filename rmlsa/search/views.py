from django.shortcuts import render

# Create your views here.
import re

from django.db.models import Q

import events.models
import gallery.models
import home.models
import home.views
import profiles.models

import logging

logger = logging.getLogger('basic_logger')

QUERY = "searchword"

MODEL_MAP = {
    "driver": {"model": profiles.models.Driver, "fields": ["first_name", "last_name"]},
    "profile": {"model": profiles.models.Profile, "fields": ["email", ]},
    "sponsor": {"model": profiles.models.Sponsor, "fields": ["name", "url", ]},
    "sprintcar": {"model": profiles.models.SprintCar, "fields": ["brand", "number", ]},
    "event": {"model": events.models.Event, "fields": ["venue", "winner", "car_type", "event_type", ]},
    "city": {"model": events.models.City, "fields": ["name", ]},
    "gallery_image": {"model": gallery.models.GalleryImage, "fields": ["name", "caption", ]},
    "welcome_message": {"model": home.models.WelcomeMessage, "fields": ["text", ]},
}


def normalize_query(query_string, findterms=re.compile(r'"([^"]+)"|(\S+)').findall,
                    normspace=re.compile(r'\s{2,}').sub):
    return [normspace(' ', (t[0] or t[1]).strip()) for t in findterms(query_string)]


def build_query(query_string, search_fields):
    """
    Returns a query, that is a combination of Q objects. That combination
    aims to search keywords within a model by testing the given search fields.
    """

    query = None  # Query to search for every search term
    terms = normalize_query(query_string)
    for term in terms:
        or_query = None  # Query to search for a given term in each field
        for field_name in search_fields:
            q = Q(**{"{}__icontains".format(field_name): term})

            if or_query:
                or_query = or_query | q
            else:
                or_query = q

        if query:
            query = query & or_query
        else:
            query = or_query
    return query


def generic_search(request, model, fields, query_param="q"):
    query_string = request.GET.get(query_param, "").strip()

    if not query_string or query_string == "":
        return None

    entry_query = build_query(query_string, fields)

    found_entries = model.objects.filter(entry_query)

    return found_entries


def search(request):
    found_drivers = []

    for name, config in MODEL_MAP.items():
        if name == "driver":
            try:
                results = generic_search(request, config["model"], config["fields"], QUERY)
                found_drivers.extend(results)
            except TypeError as e:
                logger.error('One or more fields set up to be searched is not valid for text. Model: {}'
                             'Fields: {} Error: {}'.format(config["model"], config["fields"], e))
                continue

    return render(request, 'search/search_results.html', {'random_image': home.views.get_random_image(),
                                                          'partners': home.views.get_partner_links(),
                                                          'found_drivers': found_drivers,
                                                          'query_string': request.GET.get(QUERY, ""),
                                                          'sidebar_search_off': '1'})
