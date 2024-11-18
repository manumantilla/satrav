@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-6">Crear Nueva Parada</h1>

    <form action="{{ route('paradas.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="vehiculo_id" class="block text-sm font-medium text-gray-700">Vehículo</label>
            <input type="number" name="vehiculo_id" id="vehiculo_id" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
        </div>

        <div>
            <label for="fecha" class="block text-sm font-medium text-gray-700">Fecha</label>
            <input type="date" name="fecha" id="fecha" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
        </div>

        <div>
            <label for="clase" class="block text-sm font-medium text-gray-700">Clase</label>
            <select name="clase" id="clase" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                <option value="descanso">Descanso</option>
                <option value="dormir">Dormir</option>
                <option value="falla">Falla</option>
                <option value="trancon">Trancon</option>
            </select>
        </div>

        <div>
            <label for="tipo" class="block text-sm font-medium text-gray-700">Tipo</label>
            <select name="tipo" id="tipo" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                <option value="programada">Programada</option>
                <option value="no programada">No Programada</option>
            </select>
        </div>

        <div>
            <label for="tiempo_aproximado" class="block text-sm font-medium text-gray-700">Tiempo Aproximado (minutos)</label>
            <input type="number" name="tiempo_aproximado" id="tiempo_aproximado" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Opcional">
        </div>

        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Guardar Parada</button>
    </form>
</div>
@endsection
