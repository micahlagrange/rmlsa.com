# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('profiles', '0007_auto_20150315_2243'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='sponsor',
            name='driver',
        ),
        migrations.AddField(
            model_name='sponsor',
            name='drivers',
            field=models.ManyToManyField(to='profiles.Driver', related_name='sponsors', null=True),
            preserve_default=True,
        ),
    ]
