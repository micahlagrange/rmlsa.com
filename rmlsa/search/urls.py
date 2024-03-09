from django.urls import path

import search.views

app_name = 'search'
urlpatterns = [
    # Search urls
    path('', search.views.search, name='search'),
    # url(r'^results/$', search.views.results, name='results')
]
