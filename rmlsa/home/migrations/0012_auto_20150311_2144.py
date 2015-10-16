# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('home', '0011_auto_20150311_2139'),
    ]

    operations = [
        migrations.AlterField(
            model_name='galleryimage',
            name='thumbnail',
            field=models.ImageField(default=None, null=True, upload_to='user_images/thumbnails', blank=True),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='profileimage',
            name='thumbnail',
            field=models.ImageField(default=None, null=True, upload_to='user_images/profiles/thumbnails', blank=True),
            preserve_default=True,
        ),
    ]
