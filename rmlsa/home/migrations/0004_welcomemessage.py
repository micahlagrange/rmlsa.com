# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('home', '0003_uploadedimage_thumbnail'),
    ]

    operations = [
        migrations.CreateModel(
            name='WelcomeMessage',
            fields=[
                ('id', models.AutoField(serialize=False, auto_created=True, verbose_name='ID', primary_key=True)),
                ('text', models.CharField(max_length=2000)),
                ('date_created', models.DateField(auto_now=True, verbose_name='Date created')),
                ('date_modified', models.DateField(auto_now=True, verbose_name='Date edited')),
            ],
            options={
            },
            bases=(models.Model,),
        ),
    ]
