# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('home', '0009_auto_20150311_2114'),
    ]

    operations = [
        migrations.CreateModel(
            name='ProfileImage',
            fields=[
                ('id', models.AutoField(auto_created=True, serialize=False, verbose_name='ID', primary_key=True)),
                ('image', models.ImageField(upload_to='user_images/profiles')),
                ('thumbnail', models.ImageField(upload_to='user_images/profiles/thumbnails')),
            ],
            options={
            },
            bases=(models.Model,),
        ),
    ]
