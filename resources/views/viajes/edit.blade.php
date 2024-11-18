@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-6">Editar Viaje</h1>
    
    <form action="{{ route('viajes.update', $viaje->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="mb-4">
            <label for="vehiculo_id" class="block text-gray-700">Vehículo</label>
            <input type="text" name="vehiculo_id" id="vehiculo_id" value="{{ $viaje->vehiculo_id }}" class="w-full px-3 py-2 border border-gray-300 rounded" required>
        </div>
        
        <div class="mb-4">
            <label for="driver_id" class="block text-gray-700">Conductor</label>
            <input type="text" name="driver_id" id="driver_id" value="{{ $viaje->driver_id }}" class="w-full px-3 py-2 border border-gray-300 rounded" required>
        </div>

        <div class="mb-4">
            <label for="estado" class="block text-gray-700">Estado</label>
            <select name="estado" id="estado" class="w-full px-3 py-2 border border-gray-300 rounded">
                <option value="pend" {{ $viaje->estado == 'pend' ? 'selected' : '' }}>Pendiente</option>
                <option value="curso" {{ $viaje->estado == 'curso' ? 'selected' : '' }}>En Curso</option>
                <option value="compo" {{ $viaje->estado == 'compo' ? 'selected' : '' }}>Completado</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Actualizar Viaje</button>
    </form>
</div>
@endsection
