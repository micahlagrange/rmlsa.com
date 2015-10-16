from django.contrib import admin

from classifieds.models import Ad

# Register your models here.
class AdminClassifiedAd(admin.ModelAdmin):
    fields = ('name', 'image', 'description', 'date', 'price')

admin.site.register(Ad, AdminClassifiedAd)