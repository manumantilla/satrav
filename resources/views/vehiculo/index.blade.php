@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
    <h1 class="text-2xl font-bold mb-6">Lista de Vehículos</h1>
    <a href="{{ route('vehiculos.create') }}" 
       class="mb-4 inline-block bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-200">
       Crear Vehículo
    </a>
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-md mb-4">
            {{ session('success') }}
        </div>
    @endif
    <table class="w-full border-collapse border border-gray-200 rounded-md shadow-sm">
        <thead class="bg-gray-100">
            <tr>
                <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Matrícula</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Marca</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Modelo</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Estado</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Tipo</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehiculos as $vehicle)
            <tr class="hover:bg-gray-50">
                <td class="border border-gray-300 px-4 py-2">{{ $vehicle->id }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $vehicle->matricula }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $vehicle->marca }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $vehicle->modelo }}</td>
                <td class="border border-gray-300 px-4 py-2 capitalize">{{ $vehicle->estado }}</td>
                <td class="border border-gray-300 px-4 py-2 capitalize">{{ $vehicle->tipo }}</td>
                <td class="border border-gray-300 px-4 py-2 flex space-x-2">
                    <a href="{{ route('vehiculos.show', $vehicle) }}" 
                       class="bg-blue-500 text-white py-1 px-3 rounded-md hover:bg-blue-600 transition duration-200">
                       Ver
                    </a>
                    <a href="{{ route('vehiculos.edit', $vehicle) }}" 
                       class="bg-yellow-500 text-white py-1 px-3 rounded-md hover:bg-yellow-600 transition duration-200">
                       Editar
                    </a>
                    <form action="{{ route('vehiculos.destroy', $vehicle) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este vehículo?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="bg-red-500 text-white py-1 px-3 rounded-md hover:bg-red-600 transition duration-200">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
