# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('profiles', '0011_auto_20150426_1942'),
    ]

    operations = [
        migrations.AlterModelOptions(
            name='driver',
            options={'ordering': ['-points']},
        ),
    ]
