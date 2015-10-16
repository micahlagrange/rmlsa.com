# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations
import datetime


class Migration(migrations.Migration):

    dependencies = [
        ('gallery', '0003_galleryimage_date'),
    ]

    operations = [
        migrations.AlterField(
            model_name='galleryimage',
            name='date',
            field=models.DateTimeField(verbose_name='Date taken', default=datetime.datetime(2015, 3, 30, 7, 10, 1, 241974), auto_now_add=True),
            preserve_default=True,
        ),
    ]
