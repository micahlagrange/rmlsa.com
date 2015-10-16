# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations
import datetime
from django.utils.timezone import utc


class Migration(migrations.Migration):

    dependencies = [
        ('gallery', '0008_auto_20150330_0717'),
    ]

    operations = [
        migrations.AlterField(
            model_name='galleryimage',
            name='date',
            field=models.DateTimeField(default=datetime.datetime(2015, 3, 31, 1, 53, 33, 814303, tzinfo=utc), verbose_name='Date taken'),
            preserve_default=True,
        ),
    ]
