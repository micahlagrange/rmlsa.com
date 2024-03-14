import os
from django.core.files.storage import FileSystemStorage
from django.db import models


class WelcomeMessage(models.Model):
    text = models.TextField(null=True, blank=False)
    date_created = models.DateField(
        verbose_name="Date created", auto_now=True, blank=False)
    date_modified = models.DateField(
        verbose_name="Date edited", auto_now=True, blank=False)

    def __str__(self):
        return '{}'.format(self.text[0:50])


class PartnerSite(models.Model):
    name = models.CharField(null=True, blank=True, max_length=50)
    image = models.ImageField(upload_to='partners', null=True, blank=False)
    url = models.URLField(null=True, blank=False)

    def __str__(self):
        return '{} | path: {}'.format(self.name, self.image)


class LinkCategory(models.Model):
    name = models.CharField(max_length=200, null=True, blank=False)
    description = models.TextField(null=True, blank=True)

    def __str__(self):
        return '{}'.format(self.name)


class WebLink(models.Model):
    name = models.CharField(max_length=200)
    url = models.URLField(null=True, blank=False)

    category = models.ForeignKey(
        LinkCategory,
        on_delete=models.CASCADE,
        null=True,
        blank=False
    )

    def __str__(self):
        return '{}'.format(self.name)


class MembershipApplication(models.Model):
    name = models.CharField(max_length=200)
    application_file = models.FileField(
        upload_to='forms', null=True, blank=False)

    def __str__(self):
        return '{}'.format(self.name)


class NoRandomStrings(FileSystemStorage):

    def get_available_name(self, name, max_length=None):
        if self.exists(name):
            dir_name, file_name = os.path.split(name)
            file_root, file_ext = os.path.splitext(file_name)

            my_chars = ''  # Nothing...

            name = os.path.join(dir_name, '{}_{}{}'.format(
                file_root, my_chars, file_ext))
        return name


class RulesFile(models.Model):
    name = models.CharField(max_length=200)
    rules_file = models.FileField(
        storage=NoRandomStrings(), upload_to='forms', null=True, blank=False)

    def __str__(self):
        return '{}'.format(self.name)


class BannerImage(models.Model):
    name = models.CharField(max_length=80, null=False, default='banner')
    image = models.ImageField(upload_to='banners', null=True, blank=False)
