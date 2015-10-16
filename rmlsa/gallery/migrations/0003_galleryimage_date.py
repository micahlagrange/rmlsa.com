# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations
import datetime


class Migration(migrations.Migration):

    dependencies = [
        ('gallery', '0002_auto_20150323_0837'),
    ]

    operations = [
        migrations.AddField(
            model_name='galleryimage',
            name='date',
            field=models.DateTimeField(verbose_name='Date taken', auto_now_add=True, default=datetime.datetime(2015, 3, 30, 7, 6, 50, 681074)),
            preserve_default=True,
        ),
    ]
