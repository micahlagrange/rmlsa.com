# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('news', '0012_auto_20150315_2249'),
    ]

    operations = [
        migrations.AlterField(
            model_name='articleurl',
            name='name',
            field=models.CharField(max_length=200, null=True),
            preserve_default=True,
        ),
    ]
