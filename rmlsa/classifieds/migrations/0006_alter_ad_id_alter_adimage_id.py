# Generated by Django 4.2.11 on 2024-03-12 18:56

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('classifieds', '0005_auto_20151020_0832'),
    ]

    operations = [
        migrations.AlterField(
            model_name='ad',
            name='id',
            field=models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID'),
        ),
        migrations.AlterField(
            model_name='adimage',
            name='id',
            field=models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID'),
        ),
    ]
