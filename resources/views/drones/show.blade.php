@extends('layouts.app')
 @section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <p><strong>Referencia:</strong> {{ $dron->referencia }}</p>
                <p><strong>Estado:</strong> {{ ucfirst($dron->estado) }}</p>
                <p><strong>Disponibilidad:</strong> {{ $dron->disponibilidad }}</p>
                <p><strong>Batería:</strong> {{ $dron->bateria }}%</p>
                <p><strong>Fecha de Mantenimiento:</strong> {{ $dron->fecha_mantenimiento }}</p>
                <p><strong>Comprobante:</strong> {{ $dron->comprobante ? 'Sí' : 'No' }}</p>

                <a href="{{ route('drones.index') }}" class="mt-4 inline-block bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Volver
                </a>
            </div>
        </div>
    </div>
@endsection
