# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations
from django.utils.timezone import utc
import datetime


class Migration(migrations.Migration):

    dependencies = [
        ('gallery', '0009_auto_20150330_1953'),
    ]

    operations = [
        migrations.AlterField(
            model_name='galleryimage',
            name='date',
            field=models.DateTimeField(verbose_name='Date taken', default=datetime.datetime(2015, 3, 31, 4, 51, 15, 908140, tzinfo=utc)),
            preserve_default=True,
        ),
    ]
