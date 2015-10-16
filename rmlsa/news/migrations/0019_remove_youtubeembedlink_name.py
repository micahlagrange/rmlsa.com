# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('news', '0018_youtubeembedlink'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='youtubeembedlink',
            name='name',
        ),
    ]
