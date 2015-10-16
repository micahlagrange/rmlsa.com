# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('home', '0017_auto_20150312_0935'),
    ]

    operations = [
        migrations.DeleteModel(
            name='GalleryImage',
        ),
    ]
