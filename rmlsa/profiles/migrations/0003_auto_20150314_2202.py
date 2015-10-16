# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('profiles', '0002_auto_20150313_0717'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='driver',
            name='sponsor',
        ),
        migrations.AddField(
            model_name='sponsor',
            name='driver',
            field=models.ForeignKey(to='profiles.Driver', default=None, on_delete=django.db.models.deletion.SET_NULL, null=True, blank=True),
            preserve_default=True,
        ),
    ]
