# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Article',
            fields=[
                ('id', models.AutoField(primary_key=True,
                 auto_created=True, verbose_name='ID', serialize=False)),
                ('title', models.CharField(max_length=50)),
                ('subtitle', models.CharField(
                    null=True, max_length=200, default=None)),
                ('text', models.TextField()),
            ],
            options={
            },
            bases=(models.Model,),
        ),
        migrations.CreateModel(
            name='ArticleImage',
            fields=[
                ('id', models.AutoField(primary_key=True,
                 auto_created=True, verbose_name='ID', serialize=False)),
                ('image', models.ImageField(upload_to='nenws/images')),
                ('name', models.CharField(max_length=50,
                 default='article_image_2015-03-15 14:25:24.514165')),
                ('article', models.ForeignKey(null=True, to='news.Article',
                 default=None, on_delete=models.CASCADE)),
            ],
            options={
            },
            bases=(models.Model,),
        ),
        migrations.CreateModel(
            name='ArticleUrl',
            fields=[
                ('id', models.AutoField(primary_key=True,
                 auto_created=True, verbose_name='ID', serialize=False)),
                ('url', models.URLField()),
                ('name', models.CharField(max_length=200, default='Link:')),
                ('article', models.ForeignKey(null=True, default=None,
                 blank=True, to='news.Article', on_delete=models.CASCADE)),
            ],
            options={
            },
            bases=(models.Model,),
        ),
    ]
