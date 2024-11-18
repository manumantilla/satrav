@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Editar Abastecimiento</h1>
    <form action="{{ route('abastecimientos.update', $abastecimiento->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-4 shadow rounded">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="vehiculo_id" class="block text-gray-700 font-bold mb-2">Vehículo:</label>
            <select name="vehiculo_id" id="vehiculo_id" class="w-full border border-gray-300 rounded p-2">
                @foreach($vehiculos as $vehiculo)
                    <option value="{{ $vehiculo->id }}" {{ $vehiculo->id == $abastecimiento->vehiculo_id ? 'selected' : '' }}>
                        {{ $vehiculo->matricula }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="cantidad_galones" class="block text-gray-700 font-bold mb-2">Cantidad de Galones:</label>
            <input type="number" step="0.01" name="cantidad_galones" id="cantidad_galones" class="w-full border border-gray-300 rounded p-2" value="{{ $abastecimiento->cantidad_galones }}">
        </div>

        <div class="mb-4">
            <label for="costo" class="block text-gray-700 font-bold mb-2">Costo:</label>
            <input type="number" step="0.01" name="costo" id="costo" class="w-full border border-gray-300 rounded p-2" value="{{ $abastecimiento->costo }}">
        </div>

        <div class="mb-4">
            <label for="lugar" class="block text-gray-700 font-bold mb-2">Lugar:</label>
            <input type="text" name="lugar" id="lugar" class="w-full border border-gray-300 rounded p-2" value="{{ $abastecimiento->lugar }}">
        </div>

        <div class="mb-4">
            <label for="comprobante" class="block text-gray-700 font-bold mb-2">Comprobante (opcional):</label>
            <input type="file" name="comprobante" id="comprobante" class="w-full border border-gray-300 rounded p-2">
        </div>

        <div class="mt-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Actualizar</button>
            <a href="{{ route('abastecimientos.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Cancelar</a>
        </div>
    </form>
</div>
@endsection
