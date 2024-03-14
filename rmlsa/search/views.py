import django
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
    "Drivers": {"model": profiles.models.Driver, "fields": ["first_name", "last_name"]},
    "Profiles": {"model": profiles.models.Profile, "fields": ["email", ]},
    "Sponsors": {"model": profiles.models.Sponsor, "fields": ["name", "url", ]},
    "Sprintcars": {"model": profiles.models.SprintCar, "fields": ["car_info", "number", ]},
    "Events": {"model": events.models.Event, "fields": ["venue", "winner", "car_type", "event_type", ]},
    "Citys": {"model": events.models.City, "fields": ["name", ]},
    "Gallery": {"model": gallery.models.GalleryImage, "fields": ["name", "caption", ]},
    "Messages": {"model": home.models.WelcomeMessage, "fields": ["text", ]},
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
    found_items = {}

    for name, config in MODEL_MAP.items():
        if name not in found_items:
            found_items[name] = []
        try:
            results = generic_search(
                request, config["model"], config["fields"], QUERY)
            found_items[name].extend(prettify(name, results))
        except TypeError as e:
            logger.error('One or more fields set up to be searched is not valid for text. Model: {}'
                         'Fields: {} Error: {}'.format(config["model"], config["fields"], e))
            continue
        except django.core.exceptions.FieldError:
            continue

    return render(request, 'search/search_results.html', {'random_image': home.views.get_random_image(),
                                                          'partners': home.views.get_partner_links(),
                                                          'found_items': found_items,
                                                          'query_string': request.GET.get(QUERY, ""),
                                                          'sidebar_search': True})


def prettify(kinda, results):
    res = []
    for result in results:
        text = ""
        for field in MODEL_MAP[kinda]["fields"]:
            text += field + ": " + (getattr(result, field)) + "\n\n\n"
        res.append(text)
    return res
