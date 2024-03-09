# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('home', '0007_auto_20150311_2033'),
    ]

    operations = [
        migrations.CreateModel(
            name='Sponsor',
            fields=[
                ('id', models.AutoField(serialize=False,
                 auto_created=True, verbose_name='ID', primary_key=True)),
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
                ('id', models.AutoField(serialize=False,
                 auto_created=True, verbose_name='ID', primary_key=True)),
                ('number', models.CharField(null=True, max_length=80, default=None)),
                ('color', models.CharField(max_length=50)),
                ('driver', models.ForeignKey(
                    to='home.Driver', on_delete=models.CASCADE)),
                ('sponsors', models.ForeignKey(to='home.Sponsor', blank=True,
                 on_delete=django.db.models.deletion.SET_NULL, null=True, default=None)),
            ],
            options={
            },
            bases=(models.Model,),
        ),
        migrations.AlterField(
            model_name='city',
            name='name',
            field=models.CharField(max_length=255),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='driver',
            name='profile',
            field=models.ForeignKey(to='home.Profile', blank=True,
                                    on_delete=django.db.models.deletion.SET_NULL, null=True, default=None),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='event',
            name='car_type',
            field=models.ForeignKey(to='home.CarType', blank=True,
                                    on_delete=django.db.models.deletion.SET_NULL, null=True, default=None),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='event',
            name='event_type',
            field=models.ForeignKey(to='home.EventType', blank=True,
                                    on_delete=django.db.models.deletion.SET_NULL, null=True, default=None),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='event',
            name='winner',
            field=models.ForeignKey(
                to='home.Driver', blank=True, on_delete=django.db.models.deletion.SET_NULL, null=True, default=None),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='venue',
            name='city',
            field=models.ForeignKey(
                to='home.City', blank=True, on_delete=django.db.models.deletion.SET_NULL, null=True),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='welcomemessage',
            name='text',
            field=models.TextField(null=True, default=None),
            preserve_default=True,
        ),
    ]
