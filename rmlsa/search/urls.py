from django.urls import path

import search.views

app_name = 'search'

urlpatterns = [
    path('', search.views.search, name='search'),
]
