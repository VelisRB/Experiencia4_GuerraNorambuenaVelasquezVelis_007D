from http import client
from django.shortcuts import render
from rest_framework import status
from rest_framework.decorators import api_view
from rest_framework.response import Response   
from rest_framework.parsers import JSONParser
from django.views.decorators.csrf import csrf_exempt
from app.models import DatosCliente
from .serializers import DatosClienteSerializer
from rest_cliente import serializers
# Create your views here.

@csrf_exempt
@api_view(['GET','POST'])
def lista_datoscliente(request):

    if request.method == 'GET':
        datoscliente = DatosCliente.objects.all()
        serializer = DatosClienteSerializer(datoscliente, many=True)
        return Response(serializer.data)
    elif request.method == 'POST':
        serializer = DatosClienteSerializer(data=request.data)
        if serializer.is_valid():
            serializer.save()
            return Response(serializer.data, status=status.HTTP_201_CREATED)
        else:
            return Response(serializer.errors, status=status.HTTP_400_BAD_REQUEST)    
@api_view(['GET','PUT','DELETE'])

def detalle_datoscliente(request, id):

    try:
        datoscliente = DatosCliente.objects.get(rutreg=id)
    except DatosCliente.DoesNotExist:
        return Response(status=status.HTTP_404_NOT_FOUND)
    if request.method == 'GET':
        serializer = DatosClienteSerializer(datoscliente)
        return Response(serializer.data)
    if request.method == 'PUT':
        serializer = DatosClienteSerializer(data=request.data)
        if serializer.is_valid():
            serializer.save()
            return Response(serializer.data)
        else:
            return Response(serializer.errors, status=status.HTTP_400_BAD_REQUEST)
    elif request.method == 'DELETE':
        datoscliente.delete()
        return Response(status=status.HTTP_204_NO_CONTENT)

