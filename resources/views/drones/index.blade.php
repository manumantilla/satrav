@extends('layouts.app')
 @section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <a href="{{ route('drones.create') }}" class="mb-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Añadir Dron
                </a>

                <table class="min-w-full bg-white mt-4">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="py-2 px-4 text-left">Referencia</th>
                            <th class="py-2 px-4 text-left">Estado</th>
                            <th class="py-2 px-4 text-left">Disponibilidad</th>
                            <th class="py-2 px-4 text-left">Batería (%)</th>
                            <th class="py-2 px-4 text-left">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($drones as $dron)
                            <tr class="border-t">
                                <td class="py-2 px-4">{{ $dron->referencia }}</td>
                                <td class="py-2 px-4">{{ ucfirst($dron->estado) }}</td>
                                <td class="py-2 px-4">{{ $dron->disponibilidad }}</td>
                                <td class="py-2 px-4">{{ $dron->bateria }}%</td>
                                <td class="py-2 px-4">
                                    <a href="{{ route('drones.show', $dron->id) }}" class="text-blue-500 hover:underline">Ver</a>
                                    <a href="{{ route('drones.edit', $dron->id) }}" class="text-green-500 hover:underline ml-2">Editar</a>
                                    <form action="{{ route('drones.destroy', $dron->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:underline ml-2" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection