from django.db import models
from profiles.models import Driver


# Create your models here.
class CarType(models.Model):
    name = models.CharField(max_length=50)

    def __str__(self):
        return '{}'.format(self.name)


class City(models.Model):
    name = models.CharField(max_length=255)

    def __str__(self):
        return '{}'.format(self.name)


class Venue(models.Model):
    name = models.CharField(max_length=80)

    city = models.ForeignKey(
        City,
        on_delete=models.SET_NULL,
        blank=True,
        null=True
    )

    def __str__(self):
        return '{}'.format(self.name)


class EventType(models.Model):
    name = models.CharField(max_length=50, null=True, blank=True)

    def __str__(self):
        return '{}'.format(self.name)


class Event(models.Model):
    date = models.DateField()
    venue = models.ForeignKey(
        Venue,
        on_delete=models.SET_NULL,
        default=None,
        blank=True,
        null=True
    )
    car_type = models.ForeignKey(
        CarType,
        on_delete=models.SET_NULL,
        default=None,
        blank=True,
        null=True
    )
    event_type = models.ForeignKey(
        EventType,
        on_delete=models.SET_NULL,
        default=None,
        null=True,
        blank=False
    )
    winner = models.ForeignKey(
        Driver,
        on_delete=models.SET_NULL,
        default=None,
        blank=True,
        null=True
    )

    def __str__(self):
        return '{} {}'.format(self.venue, self.event_type)

    class Meta:
        # Sort Events at the top on admin page
        verbose_name_plural = ' Events'
        # Order events by event date ascending
        ordering = ['date',]
