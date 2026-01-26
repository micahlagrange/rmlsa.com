# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('profiles', '0005_remove_sponsor_driver'),
    ]

    operations = [
        migrations.RenameField(
            model_name='sponsor',
            old_name='drivernew',
            new_name='driver',
        ),
    ]
