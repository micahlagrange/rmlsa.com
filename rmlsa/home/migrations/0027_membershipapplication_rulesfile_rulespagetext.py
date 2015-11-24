# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('home', '0026_auto_20150317_2046'),
    ]

    operations = [
        migrations.CreateModel(
            name='MembershipApplication',
            fields=[
                ('id', models.AutoField(serialize=False, primary_key=True, verbose_name='ID', auto_created=True)),
                ('name', models.CharField(max_length=200)),
                ('application_file', models.FileField(null=True, upload_to='forms')),
            ],
        ),
        migrations.CreateModel(
            name='RulesFile',
            fields=[
                ('id', models.AutoField(serialize=False, primary_key=True, verbose_name='ID', auto_created=True)),
                ('name', models.CharField(max_length=200)),
                ('rules_file', models.FileField(null=True, upload_to='forms')),
            ],
        ),
        migrations.CreateModel(
            name='RulesPageText',
            fields=[
                ('id', models.AutoField(serialize=False, primary_key=True, verbose_name='ID', auto_created=True)),
                ('title', models.CharField(max_length=200)),
                ('text', models.TextField(null=True)),
                ('date_created', models.DateField(auto_now=True, verbose_name='Date created')),
                ('date_modified', models.DateField(auto_now=True, verbose_name='Date edited')),
            ],
        ),
    ]
