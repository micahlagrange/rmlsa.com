# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('news', '0002_auto_20150315_1840'),
    ]

    operations = [
        migrations.AlterField(
            model_name='articleimage',
            name='name',
            field=models.CharField(default='article_image_2015-03-15 22:28:40.340631', max_length=50),
            preserve_default=True,
        ),
    ]
