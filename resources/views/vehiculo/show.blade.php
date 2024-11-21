@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
    <h1 class="text-2xl font-bold mb-6 text-gray-800">Detalles del Vehículo</h1>
    <ul class="space-y-4">
        <li class="text-lg">
            <strong class="font-medium text-gray-700">ID Usuario:</strong> 
            <span class="text-gray-600">{{ $vehiculo->user_id }}</span>
        </li>
        <li class="text-lg">
            <strong class="font-medium text-gray-700">Matrícula:</strong> 
            <span class="text-gray-600">{{ $vehiculo->matricula }}</span>
        </li>
        <li class="text-lg">
            <strong class="font-medium text-gray-700">Marca:</strong> 
            <span class="text-gray-600">{{ $vehiculo->marca }}</span>
        </li>
        <li class="text-lg">
            <strong class="font-medium text-gray-700">Modelo:</strong> 
            <span class="text-gray-600">{{ $vehiculo->modelo }}</span>
        </li>
        <li class="text-lg">
            <strong class="font-medium text-gray-700">Estado:</strong> 
            <span class="text-gray-600 capitalize">{{ $vehiculo->estado }}</span>
        </li>
        <li class="text-lg">
            <strong class="font-medium text-gray-700">Tipo:</strong> 
            <span class="text-gray-600 capitalize">{{ $vehiculo->tipo }}</span>
        </li>
    </ul>
    <a href="{{ route('vehiculos.index') }}" 
       class="mt-6 inline-block bg-gray-500 text-white py-2 px-4 rounded-md shadow-lg hover:bg-gray-600 hover:scale-105 transition-transform duration-200">
       Volver
    </a>
</div>
@endsection
