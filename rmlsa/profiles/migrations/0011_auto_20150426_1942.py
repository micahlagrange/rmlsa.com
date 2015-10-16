# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('profiles', '0010_driver_points'),
    ]

    operations = [
        migrations.AlterField(
            model_name='sponsor',
            name='drivers',
            field=models.ManyToManyField(to='profiles.Driver', related_name='sponsors'),
        ),
    ]
