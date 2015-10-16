# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('home', '0006_auto_20150311_2029'),
    ]

    operations = [
        migrations.RenameModel(
            old_name='Drivers',
            new_name='Driver',
        ),
    ]
