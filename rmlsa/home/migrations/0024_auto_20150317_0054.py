# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('home', '0023_auto_20150316_0012'),
    ]

    operations = [
        migrations.AlterField(
            model_name='welcomemessage',
            name='text',
            field=models.TextField(null=True),
            preserve_default=True,
        ),
    ]
