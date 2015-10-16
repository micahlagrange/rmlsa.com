# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('news', '0019_remove_youtubeembedlink_name'),
    ]

    operations = [
        migrations.AlterModelOptions(
            name='article',
            options={'ordering': ['pub_date']},
        ),
    ]
