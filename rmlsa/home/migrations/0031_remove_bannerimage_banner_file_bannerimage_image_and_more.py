# Generated by Django 4.2.11 on 2024-03-14 04:53

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('home', '0030_bannerimage'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='bannerimage',
            name='banner_file',
        ),
        migrations.AddField(
            model_name='bannerimage',
            name='image',
            field=models.ImageField(null=True, upload_to='banners'),
        ),
        migrations.AddField(
            model_name='bannerimage',
            name='name',
            field=models.CharField(default='banner', max_length=80),
        ),
    ]
