from django.db import models

from classes import create_thumbnail
from django.utils import timezone

# Create your models here.


class Ad(models.Model):
    price = models.DecimalField(
        null=True, default=1, max_digits=10, decimal_places=2)
    name = models.CharField(max_length=50, null=True, blank=False)
    description = models.TextField(null=True, blank=False)

    date = models.DateTimeField(
        verbose_name='Date created', null=False, blank=False, default=timezone.now)

    def __str__(self):
        return '{} | ${}'.format(self.name, self.price)

    class Meta:
        ordering = ('-pk',)


class AdImage(models.Model):
    ad = models.ForeignKey('Ad', on_delete=models.CASCADE)
    image = models.ImageField(
        upload_to='classified_images', null=True, blank=False)
    thumbnail = models.ImageField(
        upload_to='classified_images/thumbnails', null=True, blank=True, default=None)

    def save(self, *args, **kwargs):
        # create a thumbnail
        create_thumbnail(self)

        super(AdImage, self).save(*args, **kwargs)

    def __str__(self):
        return '{}'.format(self.image)
