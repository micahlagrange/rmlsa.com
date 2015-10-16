# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('home', '0002_auto_20150308_1313'),
    ]

    operations = [
        migrations.AddField(
            model_name='uploadedimage',
            name='thumbnail',
            field=models.ImageField(default='NULL', upload_to='user_images/thumbnails'),
            preserve_default=False,
        ),
    ]
