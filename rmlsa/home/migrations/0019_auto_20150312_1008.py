# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('home', '0018_delete_galleryimage'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='driver',
            name='profile',
        ),
        migrations.RemoveField(
            model_name='driver',
            name='sponsor',
        ),
        migrations.RemoveField(
            model_name='profile',
            name='picture',
        ),
        migrations.DeleteModel(
            name='Profile',
        ),
        migrations.DeleteModel(
            name='ProfileImage',
        ),
        migrations.DeleteModel(
            name='Sponsor',
        ),
        migrations.RemoveField(
            model_name='sprintcar',
            name='driver',
        ),
        migrations.DeleteModel(
            name='Driver',
        ),
        migrations.DeleteModel(
            name='SprintCar',
        ),
    ]
