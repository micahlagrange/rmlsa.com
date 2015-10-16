# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('home', '0014_partnersite'),
    ]

    operations = [
        migrations.AddField(
            model_name='partnersite',
            name='name',
            field=models.CharField(max_length=50, blank=True, null=True, default=None),
            preserve_default=True,
        ),
    ]
