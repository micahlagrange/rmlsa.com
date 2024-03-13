from django import forms
from gallery.models import GalleryImage
from home.models import PartnerSite


class SearchForm(forms.Form):
    query_string = forms.Textarea
