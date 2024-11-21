@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-6">Registros de Comportamientos</h1>

    @if($comportamientos->isEmpty())
        <p class="text-gray-600">No hay registros de comportamientos.</p>
    @else
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Conductor</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Vehículo</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Tipo</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Ubicación</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comportamientos as $comportamiento)
                    <tr>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">
                            {{ $comportamiento->user->name ?? 'No asignado' }}
                        </td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">
                            {{ $comportamiento->vehiculo->matricula ?? 'No asignado' }}
                        </td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">
                            {{ $comportamiento->tipo }}
                        </td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">
                            Lat: {{ $comportamiento->latitud }}, Lon: {{ $comportamiento->longitud }}
                        </td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">
                            {{ $comportamiento->created_at->format('d/m/Y H:i') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
