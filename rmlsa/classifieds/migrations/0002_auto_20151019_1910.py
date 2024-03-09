# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('classifieds', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='AdImage',
            fields=[
                ('id', models.AutoField(serialize=False,
                 primary_key=True, verbose_name='ID', auto_created=True)),
                ('image', models.ImageField(upload_to='classified_images', null=True)),
                ('thumbnail', models.ImageField(
                    upload_to='classified_images/thumbnails', null=True, blank=True, default=None)),
            ],
        ),
        migrations.RemoveField(
            model_name='ad',
            name='image',
        ),
        migrations.RemoveField(
            model_name='ad',
            name='thumbnail',
        ),
        migrations.AddField(
            model_name='adimage',
            name='ad',
            field=models.ForeignKey(
                to='classifieds.Ad', on_delete=models.CASCADE),
        ),
    ]
