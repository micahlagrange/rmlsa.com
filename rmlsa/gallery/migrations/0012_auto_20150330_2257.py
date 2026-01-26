# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations
import django.utils.timezone


class Migration(migrations.Migration):

    dependencies = [
        ('gallery', '0011_auto_20150330_2252'),
    ]

    operations = [
        migrations.AlterField(
            model_name='galleryimage',
            name='date',
            field=models.DateTimeField(verbose_name='Date taken', default=django.utils.timezone.now),
            preserve_default=True,
        ),
    ]
