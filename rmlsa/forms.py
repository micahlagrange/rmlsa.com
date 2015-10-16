from django import forms
from gallery.models import GalleryImage
from home.models import PartnerSite


class GalleryImageUploader(forms.ModelForm):
    class Meta:
        model = GalleryImage
        fields = ['image', 'name', 'caption', 'date']
        permissions = (
            ('upload_image', 'Can upload images'),
            ('delete_image', 'Can delete images'),
        )


class PartnerEdit(forms.ModelForm):
    class Meta:
        model = PartnerSite
        fields = ['name', 'image', 'url']
        permissions = (
            ('edit_partner', 'Can edit partner links'),
        )


class DeleteModel(forms.Form):
    is_submitted = forms.CharField(widget=forms.HiddenInput())


class SearchForm(forms.Form):
    query_string = forms.Textarea


class ContactForm(forms.Form):
    from_email = forms.EmailField()
    subject = forms.CharField(max_length=200)
    message = forms.CharField(widget=forms.Textarea)