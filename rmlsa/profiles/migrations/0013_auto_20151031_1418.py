# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('profiles', '0012_auto_20151017_2307'),
    ]

    operations = [
        migrations.AlterField(
            model_name='driver',
            name='points',
            field=models.IntegerField(verbose_name='Points', default=None, null=True),
        ),
    ]
