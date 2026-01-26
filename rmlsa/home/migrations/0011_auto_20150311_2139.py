# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('home', '0010_profileimage'),
    ]

    operations = [
        migrations.AlterField(
            model_name='profile',
            name='picture',
            field=models.ForeignKey(default=None, blank=True, to='home.ProfileImage', null=True, on_delete=django.db.models.deletion.SET_NULL),
            preserve_default=True,
        ),
    ]
