from pyexpat import model
from rest_framework import serializers
from app.models import DatosCliente

class DatosClienteSerializer(serializers.ModelSerializer):
    class Meta:
        model = DatosCliente
        fields = ['rutreg','nombre','apellidos','correo','telefono']