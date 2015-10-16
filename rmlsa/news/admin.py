from django.contrib import admin
from .models import *


# Register your models here.
class ArticleUrlInline(admin.TabularInline):
    model = ArticleUrl
    fields = ('name', 'url')


class ArticleImageInline(admin.TabularInline):
    model = ArticleImage
    fields = ('image', 'name')
    max_num = 1
    extra = 1


class YoutubeEmbedInline(admin.TabularInline):
    model = YoutubeEmbedLink
    fields = ('link',)


class ArticleAdmin(admin.ModelAdmin):
    model = Article
    fields = ('title', 'subtitle', 'text', 'pub_date')
    inlines = (ArticleUrlInline, ArticleImageInline, YoutubeEmbedInline)


admin.site.register(Article, ArticleAdmin)