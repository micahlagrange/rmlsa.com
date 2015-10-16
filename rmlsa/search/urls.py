from django.conf.urls import patterns, include, url

import search.views

urlpatterns = patterns(
    '',
    # Search urls
    url(r'^$', search.views.search, name='search'),
    # url(r'^results/$', search.views.results, name='results')
)