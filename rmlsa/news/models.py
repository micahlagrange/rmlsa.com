from django.db import models
from datetime import datetime


# Create your models here.
class Article(models.Model):
    title = models.CharField(max_length=50, null=True, blank=False)
    subtitle = models.CharField(max_length=200, default=None, blank=True)
    text = models.TextField(null=True, blank=False)
    pub_date = models.DateTimeField(null=True, blank=False)

    def __str__(self):
        return '{}'.format(self.title)

    class Meta:
        ordering = ['-pub_date', ]


class ArticleImage(models.Model):
    article = models.ForeignKey(
        Article,
        on_delete=models.CASCADE,
        null=True,
        blank=False
    )
    image = models.ImageField(upload_to='news/images', null=True, blank=False)
    name = models.CharField(max_length=50, null=True, blank=False)

    def __str__(self):
        return '{}'.format(self.name)


class ArticleUrl(models.Model):
    article = models.ForeignKey(
        Article,
        on_delete=models.CASCADE,
        null=True,
        blank=False
    )
    url = models.URLField(null=True, blank=True)
    name = models.CharField(max_length=200, null=True, blank=False)

    def __str__(self):
        return '{}: {}'.format(self.name, self.url)


class YoutubeEmbedLink(models.Model):
    article = models.ForeignKey(
        Article,
        on_delete=models.CASCADE,
        null=True,
        blank=False
    )
    link = models.TextField(null=True, blank=False)

    def __str__(self):
        return '{} youtube embed'.format(self.article)
