# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('profiles', '0006_auto_20150315_2243'),
    ]

    operations = [
        migrations.AlterField(
            model_name='sponsor',
            name='driver',
            field=models.ManyToManyField(null=True, to='profiles.Driver'),
            preserve_default=True,
        ),
    ]
