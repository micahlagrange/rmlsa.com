# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations
from django.utils.timezone import utc
import datetime


class Migration(migrations.Migration):

    dependencies = [
        ('gallery', '0010_auto_20150330_2251'),
    ]

    operations = [
        migrations.AlterField(
            model_name='galleryimage',
            name='date',
            field=models.DateTimeField(verbose_name='Date taken', default=datetime.datetime(2015, 3, 31, 4, 52, 56, 143873, tzinfo=utc)),
            preserve_default=True,
        ),
    ]
