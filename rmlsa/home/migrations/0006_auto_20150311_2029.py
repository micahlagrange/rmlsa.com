# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('home', '0005_auto_20150311_1902'),
    ]

    operations = [
        migrations.CreateModel(
            name='Drivers',
            fields=[
                ('id', models.AutoField(primary_key=True, auto_created=True, serialize=False, verbose_name='ID')),
                ('first_name', models.CharField(max_length=200)),
                ('last_name', models.CharField(max_length=200)),
            ],
            options={
            },
            bases=(models.Model,),
        ),
        migrations.CreateModel(
            name='Profile',
            fields=[
                ('id', models.AutoField(primary_key=True, auto_created=True, serialize=False, verbose_name='ID')),
                ('picture', models.ImageField(upload_to='', default=None, null=True)),
                ('email', models.EmailField(max_length=200, default=None, null=True)),
            ],
            options={
            },
            bases=(models.Model,),
        ),
        migrations.AddField(
            model_name='drivers',
            name='profile',
            field=models.ForeignKey(to='home.Profile'),
            preserve_default=True,
        ),
        migrations.AddField(
            model_name='event',
            name='winner',
            field=models.ForeignKey(null=True, to='home.Drivers', default=None),
            preserve_default=True,
        ),
    ]
