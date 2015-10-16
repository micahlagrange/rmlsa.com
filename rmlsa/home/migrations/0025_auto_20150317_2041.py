# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('home', '0024_auto_20150317_0054'),
    ]

    operations = [
        migrations.AlterField(
            model_name='weblink',
            name='category',
            field=models.ForeignKey(to='home.LinkCategory', default=1),
            preserve_default=True,
        ),
    ]
