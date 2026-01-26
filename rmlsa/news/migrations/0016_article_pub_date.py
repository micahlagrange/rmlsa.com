# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations
import datetime


class Migration(migrations.Migration):

    dependencies = [
        ('news', '0015_remove_article_pub_date'),
    ]

    operations = [
        migrations.AddField(
            model_name='article',
            name='pub_date',
            field=models.DateField(default=datetime.datetime(2015, 3, 15, 23, 1, 11, 788247)),
            preserve_default=True,
        ),
    ]
