# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('events', '0002_auto_20150315_2325'),
    ]

    operations = [
        migrations.AlterField(
            model_name='event',
            name='event_type',
            field=models.ForeignKey(default=None, on_delete=django.db.models.deletion.SET_NULL, to='events.EventType', null=True),
            preserve_default=True,
        ),
    ]
