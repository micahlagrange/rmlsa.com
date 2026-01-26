# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('home', '0021_auto_20150316_0011'),
    ]

    operations = [
        migrations.AlterField(
            model_name='partnersite',
            name='name',
            field=models.CharField(null=True, max_length=50, blank=True),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='partnersite',
            name='url',
            field=models.URLField(null=True),
            preserve_default=True,
        ),
    ]
