# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('profiles', '0008_auto_20150315_2345'),
    ]

    operations = [
        migrations.RenameField(
            model_name='sprintcar',
            old_name='brand',
            new_name='car_info',
        ),
    ]
