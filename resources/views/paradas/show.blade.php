@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-6">Detalles de Parada</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <p><strong>Vehículo:</strong> {{ $parada->vehiculo->nombre ?? 'N/A' }}</p>
        <p><strong>Fecha:</strong> {{ $parada->fecha }}</p>
        <p><strong>Clase:</strong> {{ ucfirst($parada->clase) }}</p>
        <p><strong>Tipo:</strong> {{ ucfirst($parada->tipo) }}</p>
        <p><strong>Tiempo Aproximado:</strong> {{ $parada->tiempo_aproximado ?? 'N/A' }} minutos</p>

        <a href="{{ route('paradas.index') }}" class="inline-block mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Volver a la lista</a>
    </div>
</div>
@endsection
