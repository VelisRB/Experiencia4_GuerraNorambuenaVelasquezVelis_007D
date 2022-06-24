from django.urls import URLPattern, path
from rest_cliente.views import *

urlpatterns = [
    path('lista_datoscliente', lista_datoscliente, name="lista_datoscliente"),
    path('detalle_datoscliente/<id>', detalle_datoscliente, name="detalle_datoscliente")
]
