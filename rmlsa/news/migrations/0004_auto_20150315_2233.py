# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('news', '0003_auto_20150315_2228'),
    ]

    operations = [
        migrations.AlterField(
            model_name='articleimage',
            name='name',
            field=models.CharField(max_length=50, default='article_image_2015-03-15 22:33:42.724926'),
            preserve_default=True,
        ),
    ]
