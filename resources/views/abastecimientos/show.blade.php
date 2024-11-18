@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Detalle del Abastecimiento</h1>
    <div class="bg-white p-4 shadow rounded">
        <p><strong>Vehículo:</strong> {{ $abastecimiento->vehiculo->matricula ?? 'Sin vehículo' }}</p>
        <p><strong>Cantidad de Galones:</strong> {{ $abastecimiento->cantidad_galones }} galones</p>
        <p><strong>Costo:</strong> ${{ number_format($abastecimiento->costo, 2) }}</p>
        <p><strong>Lugar:</strong> {{ $abastecimiento->lugar }}</p>
        <p><strong>Comprobante:</strong> 
            @if($abastecimiento->comprobante)
                <a href="{{ asset('storage/'.$abastecimiento->comprobante) }}" target="_blank" class="text-blue-500 hover:underline">Ver Comprobante</a>
            @else
                No disponible
            @endif
        </p>
    </div>
    <div class="mt-4">
        <a href="{{ route('abastecimientos.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Volver</a>
        <a href="{{ route('abastecimientos.edit', $abastecimiento->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Editar</a>
    </div>
</div>
@endsection
