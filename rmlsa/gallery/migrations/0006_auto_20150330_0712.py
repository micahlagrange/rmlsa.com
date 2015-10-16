# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations
import datetime
from django.utils.timezone import utc


class Migration(migrations.Migration):

    dependencies = [
        ('gallery', '0005_auto_20150330_0710'),
    ]

    operations = [
        migrations.AlterField(
            model_name='galleryimage',
            name='date',
            field=models.DateTimeField(default=datetime.datetime(2015, 3, 30, 13, 12, 3, 648975, tzinfo=utc), verbose_name='Date taken', auto_now_add=True),
            preserve_default=True,
        ),
    ]
