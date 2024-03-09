from django.conf.urls import include, url

import search.views

urlpatterns = [
    '',
    # Search urls
    url(r'^$', search.views.search, name='search'),
    # url(r'^results/$', search.views.results, name='results')
]
