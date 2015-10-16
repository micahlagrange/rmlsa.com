# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Driver',
            fields=[
                ('id', models.AutoField(primary_key=True, serialize=False, auto_created=True, verbose_name='ID')),
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
                ('id', models.AutoField(primary_key=True, serialize=False, auto_created=True, verbose_name='ID')),
                ('email', models.EmailField(default=None, max_length=200, null=True)),
            ],
            options={
            },
            bases=(models.Model,),
        ),
        migrations.CreateModel(
            name='ProfileImage',
            fields=[
                ('id', models.AutoField(primary_key=True, serialize=False, auto_created=True, verbose_name='ID')),
                ('image', models.ImageField(upload_to='user_images/profiles')),
                ('thumbnail', models.ImageField(default=None, blank=True, upload_to='user_images/profiles/thumbnails', null=True)),
            ],
            options={
            },
            bases=(models.Model,),
        ),
        migrations.CreateModel(
            name='Sponsor',
            fields=[
                ('id', models.AutoField(primary_key=True, serialize=False, auto_created=True, verbose_name='ID')),
                ('name', models.CharField(max_length=200)),
                ('url', models.URLField()),
            ],
            options={
            },
            bases=(models.Model,),
        ),
        migrations.CreateModel(
            name='SprintCar',
            fields=[
                ('id', models.AutoField(primary_key=True, serialize=False, auto_created=True, verbose_name='ID')),
                ('number', models.CharField(default=None, max_length=80, null=True)),
                ('color', models.CharField(max_length=50)),
                ('driver', models.ForeignKey(to='profiles.Driver')),
            ],
            options={
            },
            bases=(models.Model,),
        ),
        migrations.AddField(
            model_name='profile',
            name='picture',
            field=models.ForeignKey(default=None, to='profiles.ProfileImage', on_delete=django.db.models.deletion.SET_NULL, blank=True, null=True),
            preserve_default=True,
        ),
        migrations.AddField(
            model_name='driver',
            name='profile',
            field=models.ForeignKey(default=None, to='profiles.Profile', on_delete=django.db.models.deletion.SET_NULL, blank=True, null=True),
            preserve_default=True,
        ),
        migrations.AddField(
            model_name='driver',
            name='sponsor',
            field=models.ForeignKey(default=None, to='profiles.Sponsor', on_delete=django.db.models.deletion.SET_NULL, blank=True, null=True),
            preserve_default=True,
        ),
    ]
