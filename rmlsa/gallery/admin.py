from django.contrib import admin

from .models import *


# Register your models here.
class GalleryImageAdmin(admin.ModelAdmin):
    fields = ('name', 'image', 'caption', 'date')



admin.site.register(GalleryImage, GalleryImageAdmin)