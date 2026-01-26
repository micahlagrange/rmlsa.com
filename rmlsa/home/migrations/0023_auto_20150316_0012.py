# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('home', '0022_auto_20150316_0012'),
    ]

    operations = [
        migrations.AlterField(
            model_name='linkcategory',
            name='description',
            field=models.TextField(blank=True, null=True),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='linkcategory',
            name='name',
            field=models.CharField(max_length=200, null=True),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='weblink',
            name='url',
            field=models.URLField(null=True),
            preserve_default=True,
        ),
    ]
