# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('news', '0007_auto_20150315_2240'),
    ]

    operations = [
        migrations.AlterField(
            model_name='article',
            name='subtitle',
            field=models.CharField(default=None, max_length=200, blank=True),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='article',
            name='text',
            field=models.TextField(null=True),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='article',
            name='title',
            field=models.CharField(null=True, max_length=50),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='articleimage',
            name='article',
            field=models.ForeignKey(null=True, to='news.Article'),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='articleimage',
            name='name',
            field=models.CharField(default='article_image_2015-03-15 22:43:37.809963', max_length=50),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='articleurl',
            name='article',
            field=models.ForeignKey(null=True, to='news.Article'),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='articleurl',
            name='name',
            field=models.CharField(default='Link:', max_length=200, blank=True),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='articleurl',
            name='url',
            field=models.URLField(null=True, blank=True),
            preserve_default=True,
        ),
    ]
