# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('home', '0012_auto_20150311_2144'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='sprintcar',
            name='sponsors',
        ),
        migrations.AddField(
            model_name='driver',
            name='sponsor',
            field=models.ForeignKey(blank=True, default=None, null=True, to='home.Sponsor', on_delete=django.db.models.deletion.SET_NULL),
            preserve_default=True,
        ),
    ]
