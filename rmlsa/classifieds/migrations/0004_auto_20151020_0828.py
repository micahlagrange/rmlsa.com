# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('classifieds', '0003_auto_20151019_2104'),
    ]

    operations = [
        migrations.AlterField(
            model_name='ad',
            name='price',
            field=models.DecimalField(default=0, max_digits=7, null=True, decimal_places=2),
        ),
    ]
