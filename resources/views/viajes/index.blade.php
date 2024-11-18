@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-6">Lista de Viajes</h1>
    <a href="{{ route('viajes.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Nuevo Viaje</a>
    
    @if($viajes->isEmpty())
        <p class="mt-6 text-gray-600">No hay viajes registrados.</p>
    @else
        <div class="mt-6 overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Vehículo</th>
                        <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Conductor</th>
                        <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Ruta</th>
                        <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Fecha de Salida</th>
                        <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Estado</th>
                        <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($viajes as $viaje)
                        <tr>
                            <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $viaje->vehiculo_id }}</td>
                            <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $viaje->drivers->nombre }}</td>
                            <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $viaje->routes->nombre }}</td>
                            <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $viaje->fecha_salida }}</td>
                            <td class="px-6 py-4 border-b text-sm text-gray-700">{{ ucfirst($viaje->estado) }}</td>
                            <td class="px-6 py-4 border-b text-sm text-gray-700 flex space-x-2">
                                <a href="{{ route('viajes.show', $viaje->id) }}" class="text-blue-600 hover:underline">Ver</a>
                                <a href="{{ route('viajes.edit', $viaje->id) }}" class="text-yellow-600 hover:underline">Editar</a>
                                <form action="{{ route('viajes.destroy', $viaje->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
