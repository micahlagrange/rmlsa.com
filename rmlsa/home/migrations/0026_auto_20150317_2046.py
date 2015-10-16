# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('home', '0025_auto_20150317_2041'),
    ]

    operations = [
        migrations.AlterField(
            model_name='weblink',
            name='category',
            field=models.ForeignKey(to='home.LinkCategory', null=True),
            preserve_default=True,
        ),
    ]
