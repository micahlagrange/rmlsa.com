# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('home', '0019_auto_20150312_1008'),
    ]

    operations = [
        migrations.CreateModel(
            name='LinkCategory',
            fields=[
                ('id', models.AutoField(serialize=False,
                 primary_key=True, verbose_name='ID', auto_created=True)),
                ('name', models.CharField(max_length=200)),
                ('description', models.TextField(
                    default=None, blank=True, null=True)),
            ],
            options={
            },
            bases=(models.Model,),
        ),
        migrations.CreateModel(
            name='WebLink',
            fields=[
                ('id', models.AutoField(serialize=False,
                 primary_key=True, verbose_name='ID', auto_created=True)),
                ('name', models.CharField(max_length=200)),
                ('url', models.URLField()),
                ('category', models.ForeignKey(
                    to='home.LinkCategory', on_delete=models.CASCADE)),
            ],
            options={
            },
            bases=(models.Model,),
        ),
    ]
