# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='GalleryImage',
            fields=[
                ('id', models.AutoField(primary_key=True, serialize=False, auto_created=True, verbose_name='ID')),
                ('image', models.ImageField(upload_to='user_images')),
                ('name', models.CharField(max_length=50)),
                ('caption', models.CharField(max_length=200)),
                ('thumbnail', models.ImageField(default=None, blank=True, upload_to='user_images/thumbnails', null=True)),
            ],
            options={
            },
            bases=(models.Model,),
        ),
    ]
