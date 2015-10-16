# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('home', '0020_linkcategory_weblink'),
    ]

    operations = [
        migrations.AlterField(
            model_name='partnersite',
            name='image',
            field=models.ImageField(null=True, upload_to='partners'),
            preserve_default=True,
        ),
    ]
