from django.db import models


class WelcomeMessage(models.Model):
    text = models.TextField(null=True, blank=False)
    date_created = models.DateField(verbose_name="Date created", auto_now=True, blank=False)
    date_modified = models.DateField(verbose_name="Date edited", auto_now=True, blank=False)

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
    category = models.ForeignKey(LinkCategory, null=True, blank=False)

    def __str__(self):
        return '{}'.format(self.name)