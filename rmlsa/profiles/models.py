from django.db import models
from classes import create_thumbnail


# Create your models here.
class Driver(models.Model):
    first_name = models.CharField(max_length=200)
    last_name = models.CharField(max_length=200)
    points = models.IntegerField(verbose_name='Points', null=True, blank=False, default=None)

    def __str__(self):
        return '{} {}'.format(self.first_name, self.last_name)

    class Meta:
        ordering = ['-points']


class Profile(models.Model):
    driver = models.ForeignKey(Driver, null=True, blank=False)
    email = models.EmailField(max_length=200, null=True, blank=True)
    image = models.ImageField(upload_to='user_images/profiles', null=True, blank=True)
    thumbnail = models.ImageField(upload_to='user_images/profiles/thumbnails', null=True, blank=True)

    def save(self, *args, **kwargs):
        # create a thumbnail
        create_thumbnail(self)
        super(Profile, self).save(*args, **kwargs)

    def __str__(self):
        return '{} | {}'.format(self.driver, self.email)


class Sponsor(models.Model):
    name = models.CharField(max_length=200)
    url = models.URLField(null=True, blank=True)
    # driver = models.ForeignKey(Driver, null=True, blank=False)
    drivers = models.ManyToManyField(Driver, blank=False, related_name='sponsors')

    def __str__(self):
        return '{}'.format(self.name)

    class Meta:
        ordering = ['name']


class SprintCar(models.Model):
    driver = models.ForeignKey(Driver, null=True, blank=False)
    number = models.CharField(max_length=80, null=True, blank=False)
    car_info = models.CharField(max_length=200, null=True, blank=True)

    def __str__(self):
        return '{} {}'.format(self.car_info, self.number)

    class Meta:
        ordering = ['number']
