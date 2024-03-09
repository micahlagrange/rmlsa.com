# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('profiles', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='CarType',
            fields=[
                ('id', models.AutoField(primary_key=True,
                 serialize=False, auto_created=True, verbose_name='ID')),
                ('name', models.CharField(max_length=50)),
            ],
            options={
            },
            bases=(models.Model,),
        ),
        migrations.CreateModel(
            name='City',
            fields=[
                ('id', models.AutoField(primary_key=True,
                 serialize=False, auto_created=True, verbose_name='ID')),
                ('name', models.CharField(max_length=255)),
            ],
            options={
            },
            bases=(models.Model,),
        ),
        migrations.CreateModel(
            name='Event',
            fields=[
                ('id', models.AutoField(primary_key=True,
                 serialize=False, auto_created=True, verbose_name='ID')),
                ('date', models.DateField()),
                ('car_type', models.ForeignKey(default=None, to='events.CarType',
                 on_delete=django.db.models.deletion.SET_NULL, blank=True, null=True)),
            ],
            options={
            },
            bases=(models.Model,),
        ),
        migrations.CreateModel(
            name='EventType',
            fields=[
                ('id', models.AutoField(primary_key=True,
                 serialize=False, auto_created=True, verbose_name='ID')),
                ('name', models.CharField(max_length=50)),
            ],
            options={
            },
            bases=(models.Model,),
        ),
        migrations.CreateModel(
            name='Venue',
            fields=[
                ('id', models.AutoField(primary_key=True,
                 serialize=False, auto_created=True, verbose_name='ID')),
                ('name', models.CharField(max_length=80)),
                ('city', models.ForeignKey(on_delete=django.db.models.deletion.SET_NULL,
                 to='events.City', blank=True, null=True)),
            ],
            options={
            },
            bases=(models.Model,),
        ),
        migrations.AddField(
            model_name='event',
            name='event_type',
            field=models.ForeignKey(default=None, to='events.EventType',
                                    on_delete=django.db.models.deletion.SET_NULL, blank=True, null=True),
            preserve_default=True,
        ),
        migrations.AddField(
            model_name='event',
            name='venue',
            field=models.ForeignKey(
                to='events.Venue', on_delete=models.CASCADE),
            preserve_default=True,
        ),
        migrations.AddField(
            model_name='event',
            name='winner',
            field=models.ForeignKey(default=None, to='profiles.Driver',
                                    on_delete=django.db.models.deletion.SET_NULL, blank=True, null=True),
            preserve_default=True,
        ),
    ]
