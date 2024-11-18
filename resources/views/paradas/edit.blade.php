@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-6">Editar Parada</h1>

    <form action="{{ route('paradas.update', $parada->id) }}" method="POST" class="space-y-4 bg-white shadow-md rounded-lg p-6">
        @csrf
        @method('PUT')

        <div>
            <label for="vehiculo_id" class="block text-sm font-medium text-gray-700">Vehículo</label>
            <input type="number" name="vehiculo_id" id="vehiculo_id" value="{{ old('vehiculo_id', $parada->vehiculo_id) }}" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
        </div>

        <div>
            <label for="fecha" class="block text-sm font-medium text-gray-700">Fecha</label>
            <input type="date" name="fecha" id="fecha" value="{{ old('fecha', $parada->fecha) }}" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
        </div>

        <div>
            <label for="clase" class="block text-sm font-medium text-gray-700">Clase</label>
            <select name="clase" id="clase" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                <option value="descanso" {{ $parada->clase == 'descanso' ? 'selected' : '' }}>Descanso</option>
                <option value="dormir" {{ $parada->clase == 'dormir' ? 'selected' : '' }}>Dormir</option>
                <option value="falla" {{ $parada->clase == 'falla' ? 'selected' : '' }}>Falla</option>
                <option value="trancon" {{ $parada->clase == 'trancon' ? 'selected' : '' }}>Trancon</option>
            </select>
        </div>

        <div>
            <label for="tipo" class="block text-sm font-medium text-gray-700">Tipo</label>
            <select name="tipo" id="tipo" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                <option value="programada" {{ $parada->tipo == 'programada' ? 'selected' : '' }}>Programada</option>
                <option value="no programada" {{ $parada->tipo == 'no programada' ? 'selected' : '' }}>No Programada</option>
            </select>
        </div>

        <div>
            <label for="tiempo_aproximado" class="block text-sm font-medium text-gray-700">Tiempo Aproximado (minutos)</label>
            <input type="number" name="tiempo_aproximado" id="tiempo_aproximado" value="{{ old('tiempo_aproximado', $parada->tiempo_aproximado) }}" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Opcional">
        </div>

        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Actualizar Parada</button>
        <a href="{{ route('paradas.index') }}" class="ml-4 inline-block text-blue-600 hover:underline">Cancelar</a>
    </form>
</div>
@endsection
