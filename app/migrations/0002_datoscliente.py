# Generated by Django 4.0.5 on 2022-06-09 23:57

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('app', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='DatosCliente',
            fields=[
                ('rut', models.CharField(max_length=10, primary_key=True, serialize=False, verbose_name='Rut')),
                ('nombre', models.CharField(max_length=20, verbose_name='Nombre')),
                ('apellidos', models.CharField(max_length=50, verbose_name='Apellidos')),
                ('correo', models.CharField(max_length=50, verbose_name='Correo')),
                ('telefono', models.IntegerField(verbose_name='Telefono')),
            ],
        ),
    ]
