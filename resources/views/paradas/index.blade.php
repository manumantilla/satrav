@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-6">Lista de Paradas</h1>
    <a href="{{ route('paradas.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-6">Nueva Parada</a>
    
    @if($paradas->isEmpty())
        <p class="text-gray-600">No hay paradas registradas.</p>
    @else
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Vehículo</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Fecha</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Clase</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Tipo</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Tiempo Aproximado</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($paradas as $parada)
                    <tr>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $parada->vehiculo->nombre ?? 'N/A' }}</td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $parada->fecha }}</td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">{{ ucfirst($parada->clase) }}</td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">{{ ucfirst($parada->tipo) }}</td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $parada->tiempo_aproximado ?? 'N/A' }} min</td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700 flex space-x-2">
                            <a href="{{ route('paradas.show', $parada->id) }}" class="text-blue-600 hover:underline">Ver</a>
                            <a href="{{ route('paradas.edit', $parada->id) }}" class="text-yellow-600 hover:underline">Editar</a>
                            <form action="{{ route('paradas.destroy', $parada->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
