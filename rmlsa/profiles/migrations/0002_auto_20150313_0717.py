# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('profiles', '0001_initial'),
    ]

    operations = [
        migrations.AlterField(
            model_name='driver',
            name='profile',
            field=models.OneToOneField(blank=True, null=True, default=None, on_delete=django.db.models.deletion.SET_NULL, to='profiles.Profile'),
            preserve_default=True,
        ),
    ]
