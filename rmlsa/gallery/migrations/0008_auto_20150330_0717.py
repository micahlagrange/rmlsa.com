# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations
import datetime
from django.utils.timezone import utc


class Migration(migrations.Migration):

    dependencies = [
        ('gallery', '0007_auto_20150330_0716'),
    ]

    operations = [
        migrations.AlterField(
            model_name='galleryimage',
            name='date',
            field=models.DateTimeField(default=datetime.datetime(2015, 3, 30, 13, 17, 17, 144906, tzinfo=utc), verbose_name='Date taken'),
            preserve_default=True,
        ),
    ]
