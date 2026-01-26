# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('home', '0015_partnersite_name'),
    ]

    operations = [
        migrations.RenameField(
            model_name='partnersite',
            old_name='thumbnail',
            new_name='image',
        ),
    ]
