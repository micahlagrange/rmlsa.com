# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations
from django.utils.timezone import utc
import datetime


class Migration(migrations.Migration):

    dependencies = [
        ('news', '0013_auto_20150315_2252'),
    ]

    operations = [
        migrations.AddField(
            model_name='article',
            name='pub_date',
            field=models.DateField(auto_now=True, default=datetime.datetime(2015, 3, 16, 4, 55, 6, 720367, tzinfo=utc)),
            preserve_default=False,
        ),
    ]
