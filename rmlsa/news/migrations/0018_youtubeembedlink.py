# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('news', '0017_auto_20150315_2302'),
    ]

    operations = [
        migrations.CreateModel(
            name='YoutubeEmbedLink',
            fields=[
                ('id', models.AutoField(serialize=False, primary_key=True, verbose_name='ID', auto_created=True)),
                ('link', models.TextField(null=True)),
                ('name', models.CharField(max_length=50, null=True)),
                ('article', models.ForeignKey(to='news.Article', null=True)),
            ],
            options={
            },
            bases=(models.Model,),
        ),
    ]
