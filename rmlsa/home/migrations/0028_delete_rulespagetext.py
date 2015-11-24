# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('home', '0027_membershipapplication_rulesfile_rulespagetext'),
    ]

    operations = [
        migrations.DeleteModel(
            name='RulesPageText',
        ),
    ]
