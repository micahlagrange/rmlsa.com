# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('profiles', '0003_auto_20150314_2202'),
    ]

    operations = [
        migrations.AlterModelOptions(
            name='driver',
            options={'ordering': ['last_name']},
        ),
        migrations.AlterModelOptions(
            name='sponsor',
            options={'ordering': ['name']},
        ),
        migrations.AlterModelOptions(
            name='sprintcar',
            options={'ordering': ['number']},
        ),
        migrations.RemoveField(
            model_name='driver',
            name='profile',
        ),
        migrations.RemoveField(
            model_name='profile',
            name='picture',
        ),
        migrations.DeleteModel(
            name='ProfileImage',
        ),
        migrations.RemoveField(
            model_name='sprintcar',
            name='color',
        ),
        migrations.AddField(
            model_name='profile',
            name='driver',
            field=models.ForeignKey(null=True, to='profiles.Driver'),
            preserve_default=True,
        ),
        migrations.AddField(
            model_name='profile',
            name='image',
            field=models.ImageField(null=True, blank=True, upload_to='user_images/profiles'),
            preserve_default=True,
        ),
        migrations.AddField(
            model_name='profile',
            name='thumbnail',
            field=models.ImageField(null=True, blank=True, upload_to='user_images/profiles/thumbnails'),
            preserve_default=True,
        ),
        migrations.AddField(
            model_name='sponsor',
            name='drivernew',
            field=models.ManyToManyField(to='profiles.Driver', null=True, related_name='somerandomfield'),
            preserve_default=True,
        ),
        migrations.AddField(
            model_name='sprintcar',
            name='brand',
            field=models.CharField(null=True, blank=True, max_length=200),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='profile',
            name='email',
            field=models.EmailField(null=True, blank=True, max_length=200),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='sponsor',
            name='driver',
            field=models.ForeignKey(null=True, to='profiles.Driver'),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='sponsor',
            name='url',
            field=models.URLField(null=True, blank=True),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='sprintcar',
            name='driver',
            field=models.ForeignKey(null=True, to='profiles.Driver'),
            preserve_default=True,
        ),
        migrations.AlterField(
            model_name='sprintcar',
            name='number',
            field=models.CharField(null=True, max_length=80),
            preserve_default=True,
        ),
    ]
