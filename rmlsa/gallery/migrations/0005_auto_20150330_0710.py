# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations
import datetime


class Migration(migrations.Migration):

    dependencies = [
        ('gallery', '0004_auto_20150330_0710'),
    ]

    operations = [
        migrations.AlterField(
            model_name='galleryimage',
            name='date',
            field=models.DateTimeField(auto_now_add=True, verbose_name='Date taken', default=datetime.datetime(2015, 3, 30, 7, 10, 38, 728118)),
            preserve_default=True,
        ),
    ]
