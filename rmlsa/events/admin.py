from django.contrib import admin

# Register your models here.
from .models import *

admin.site.register(Event)
admin.site.register(EventType)
admin.site.register(CarType)
admin.site.register(Venue)
admin.site.register(City)