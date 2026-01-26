# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('events', '0005_auto_20150316_1419'),
    ]

    operations = [
        migrations.AlterModelOptions(
            name='event',
            options={'verbose_name_plural': ' Events', 'ordering': ['date']},
        ),
    ]
