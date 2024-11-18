@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Lista de Abastecimientos</h1>
    <a href="{{ route('abastecimientos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Nuevo Abastecimiento</a>

    @if($abastecimientos->isEmpty())
        <p class="text-gray-700">No hay abastecimientos registrados.</p>
    @else
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-b">Vehículo</th>
                    <th class="px-4 py-2 border-b">Cantidad de Galones</th>
                    <th class="px-4 py-2 border-b">Costo</th>
                    <th class="px-4 py-2 border-b">Lugar</th>
                    <th class="px-4 py-2 border-b">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($abastecimientos as $abastecimiento)
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 border-b">{{ $abastecimiento->vehiculo->matricula ?? 'Sin vehículo' }}</td>
                        <td class="px-4 py-2 border-b">{{ $abastecimiento->cantidad_galones }} galones</td>
                        <td class="px-4 py-2 border-b">${{ number_format($abastecimiento->costo, 2) }}</td>
                        <td class="px-4 py-2 border-b">{{ $abastecimiento->lugar }}</td>
                        <td class="px-4 py-2 border-b space-x-2">
                            <a href="{{ route('abastecimientos.show', $abastecimiento->id) }}" class="text-blue-500 hover:underline">Ver</a>
                            <a href="{{ route('abastecimientos.edit', $abastecimiento->id) }}" class="text-yellow-500 hover:underline">Editar</a>
                            <form action="{{ route('abastecimientos.destroy', $abastecimiento->id) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Estás seguro?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
