# Generated by Django 4.2.17 on 2024-12-09 08:03

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('courses', '0003_alter_courses_description'),
    ]

    operations = [
        migrations.AlterField(
            model_name='courses',
            name='photo',
            field=models.ImageField(upload_to='media/images/'),
        ),
    ]