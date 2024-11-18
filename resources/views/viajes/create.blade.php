@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-6">Agregar Nuevo Viaje</h1>
    
    <form action="{{ route('viajes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-4">
            <label for="vehiculo_id" class="block text-gray-700">Vehículo</label>
            <input type="text" name="vehiculo_id" id="vehiculo_id" class="w-full px-3 py-2 border border-gray-300 rounded" required>
        </div>
        
        <div class="mb-4">
            <label for="driver_id" class="block text-gray-700">Conductor</label>
            <input type="text" name="driver_id" id="driver_id" class="w-full px-3 py-2 border border-gray-300 rounded" required>
        </div>
        
        <div class="mb-4">
            <label for="route_id" class="block text-gray-700">Ruta</label>
            <input type="text" name="route_id" id="route_id" class="w-full px-3 py-2 border border-gray-300 rounded" required>
        </div>

        <div class="mb-4">
            <label for="fecha_salida" class="block text-gray-700">Fecha de Salida</label>
            <input type="date" name="fecha_salida" id="fecha_salida" class="w-full px-3 py-2 border border-gray-300 rounded" required>
        </div>

        <div class="mb-4">
            <label for="estado" class="block text-gray-700">Estado</label>
            <select name="estado" id="estado" class="w-full px-3 py-2 border border-gray-300 rounded">
                <option value="pend">Pendiente</option>
                <option value="curso">En Curso</option>
                <option value="compo">Completado</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar Viaje</button>
    </form>
</div>
@endsection
