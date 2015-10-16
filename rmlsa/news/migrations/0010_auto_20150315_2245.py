# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('news', '0009_auto_20150315_2243'),
    ]

    operations = [
        migrations.AlterField(
            model_name='articleimage',
            name='image',
            field=models.ImageField(null=True, upload_to='news/images'),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='articleimage',
            name='name',
            field=models.CharField(null=True, max_length=50, default='article_image_2015-03-15 22:45:20.548840'),
            preserve_default=True,
        ),
    ]
