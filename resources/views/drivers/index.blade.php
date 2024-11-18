@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-6">Lista de Conductores</h1>
    <a href="{{ route('drivers.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">Nuevo Conductor</a>

    @if($drivers->isEmpty())
        <p class="text-gray-600">No hay conductores registrados.</p>
    @else
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Nombre</th>
                        <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Cédula</th>
                        <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Estado</th>
                        <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Teléfono</th>
                        <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Correo</th>
                        <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($drivers as $conductor)
                        <tr>
                            <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $conductor->nombre }}</td>
                            <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $conductor->cedula }}</td>
                            <td class="px-6 py-4 border-b text-sm text-gray-700">{{ ucfirst($conductor->estado) }}</td>
                            <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $conductor->telefono }}</td>
                            <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $conductor->correo }}</td>
                            <td class="px-6 py-4 border-b text-sm text-gray-700 flex space-x-2">
                                <a href="{{ route('drivers.show', $conductor->id) }}" class="text-blue-600 hover:underline">Ver</a>
                                <a href="{{ route('drivers.edit', $conductor->id) }}" class="text-yellow-600 hover:underline">Editar</a>
                                <form action="{{ route('drivers.destroy', $conductor->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro?');">
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
