# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('home', '0016_auto_20150312_0703'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='event',
            name='car_type',
        ),
        migrations.DeleteModel(
            name='CarType',
        ),
        migrations.RemoveField(
            model_name='event',
            name='event_type',
        ),
        migrations.RemoveField(
            model_name='event',
            name='venue',
        ),
        migrations.RemoveField(
            model_name='event',
            name='winner',
        ),
        migrations.DeleteModel(
            name='Event',
        ),
        migrations.DeleteModel(
            name='EventType',
        ),
        migrations.RemoveField(
            model_name='venue',
            name='city',
        ),
        migrations.DeleteModel(
            name='City',
        ),
        migrations.DeleteModel(
            name='Venue',
        ),
    ]
