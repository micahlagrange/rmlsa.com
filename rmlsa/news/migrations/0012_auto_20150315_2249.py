# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('news', '0011_auto_20150315_2245'),
    ]

    operations = [
        migrations.AlterField(
            model_name='articleurl',
            name='name',
            field=models.CharField(null=True, max_length=200, blank=True),
            preserve_default=True,
        ),
    ]
