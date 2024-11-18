@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-6">Monitoreo de Sensores</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Vehículo</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Tipo de Sensor</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Valor</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Unidad</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Estado</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Fecha de Instalación</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Fecha de Mantenimiento</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Alerta</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sensoresConAlerta as $sensor)
                    <tr class="{{ $sensor->alerta ? 'bg-red-100' : 'bg-white' }}">
                        <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $sensor->vehiculo_id }}</td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">{{ ucfirst($sensor->tipo) }}</td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $sensor->valor }}</td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $sensor->unidad }}</td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">{{ ucfirst($sensor->estado) }}</td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $sensor->fecha_instalacion }}</td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $sensor->fecha_mantenimiento }}</td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">
                            @if($sensor->alerta)
                                <span class="text-red-600 font-bold">¡Alerta!</span>
                            @else
                                <span class="text-green-600">Normal</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
