# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations
import django.utils.timezone


class Migration(migrations.Migration):

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Ad',
            fields=[
                ('id', models.AutoField(verbose_name='ID', auto_created=True, primary_key=True, serialize=False)),
                ('price', models.IntegerField(default=0, null=True)),
                ('image', models.ImageField(upload_to='classified_images')),
                ('name', models.CharField(max_length=50, null=True)),
                ('description', models.CharField(max_length=200, null=True)),
                ('thumbnail', models.ImageField(blank=True, default=None, null=True, upload_to='classified_images/thumbnails')),
                ('date', models.DateTimeField(verbose_name='Date created', default=django.utils.timezone.now)),
            ],
            options={
                'ordering': ('-pk',),
            },
        ),
    ]
