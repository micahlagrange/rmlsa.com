from django.contrib import admin

from .models import *


class SponsorshipInline(admin.TabularInline):
    model = Sponsor.drivers.through


class SprintCarInline(admin.TabularInline):
    model = SprintCar
    fields = ('car_info', 'number')


class ProfileInline(admin.TabularInline):
    model = Profile
    fields = ('email', 'image')


class DriverAdmin(admin.ModelAdmin):
    model = Driver
    fields = ('first_name', 'last_name', 'points')
    inlines = (SprintCarInline, ProfileInline, SponsorshipInline)


class SponsorAdmin(admin.ModelAdmin):
    inlines = (SponsorshipInline,)
    exclude = ('drivers',)


# Register your models here.
admin.site.register(Driver, DriverAdmin)
admin.site.register(Sponsor, SponsorAdmin)