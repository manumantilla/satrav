@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-6">Detalles del Viaje</h1>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <p><strong>Vehículo:</strong> {{ $viaje->vehiculo_id }}</p>
        <p><strong>Conductor:</strong> {{ $viaje->driver_id }}</p>
        <p><strong>Ruta:</strong> {{ $viaje->route_id }}</p>
        <p><strong>Fecha de Salida:</strong> {{ $viaje->fecha_salida }}</p>
        <p><strong>Estado:</strong> {{ ucfirst($viaje->estado) }}</p>
    </div>

    <a href="{{ route('viajes.index') }}" class="mt-6 inline-block bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Regresar a la lista</a>
</div>
@endsection
