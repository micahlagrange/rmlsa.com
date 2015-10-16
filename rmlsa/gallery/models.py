from django.db import models

from classes import create_thumbnail
from django.utils import timezone


# Create your models here.
class GalleryImage(models.Model):
    image = models.ImageField(upload_to='user_images', null=False, blank=False)
    name = models.CharField(max_length=50)
    caption = models.CharField(max_length=200)
    thumbnail = models.ImageField(upload_to='user_images/thumbnails', null=True, blank=True, default=None)
    date = models.DateTimeField(verbose_name='Date taken', null=False, blank=False, default=timezone.now)

    def save(self, *args, **kwargs):
        # create a thumbnail
        create_thumbnail(self)

        super(GalleryImage, self).save(*args, **kwargs)

    def __str__(self):
        return '{} | path: {}'.format(self.name, self.image)

    class Meta:
        ordering = ('-pk',)