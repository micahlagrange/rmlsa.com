from django.contrib import admin

from classifieds.models import Ad, AdImage

# Register your models here.
class AdImageInline(admin.TabularInline):
    model = AdImage
    fields = ('image',)

class AdminClassifiedAd(admin.ModelAdmin):
#    model = Ad
    fields = ('name', 'description', 'date', 'price')
    inlines = (AdImageInline,)

admin.site.register(Ad, AdminClassifiedAd)

