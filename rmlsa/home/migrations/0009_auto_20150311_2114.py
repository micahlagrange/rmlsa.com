# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('home', '0008_auto_20150311_2049'),
    ]

    operations = [
        migrations.RenameModel(
            old_name='UploadedImage',
            new_name='GalleryImage',
        ),
    ]
