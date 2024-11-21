@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
    <h1 class="text-2xl font-bold mb-6 text-gray-800">Crear Vehículo</h1>
    <form action="{{ route('vehiculos.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="user_id" class="block text-sm font-medium text-gray-700 mb-2">ID Usuario</label>
            <input type="number" name="user_id" id="user_id" 
                   class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" 
                   required>
        </div>
        <div>
            <label for="matricula" class="block text-sm font-medium text-gray-700 mb-2">Matrícula</label>
            <input type="text" name="matricula" id="matricula" 
                   class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" 
                   required>
        </div>
        <div>
            <label for="marca" class="block text-sm font-medium text-gray-700 mb-2">Marca</label>
            <input type="text" name="marca" id="marca" 
                   class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" 
                   required>
        </div>
        <div>
            <label for="modelo" class="block text-sm font-medium text-gray-700 mb-2">Modelo</label>
            <input type="text" name="modelo" id="modelo" 
                   class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" 
                   required>
        </div>
        <div>
            <label for="estado" class="block text-sm font-medium text-gray-700 mb-2">Estado</label>
            <select name="estado" id="estado" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" 
                    required>
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>
                <option value="mantenimiento">Mantenimiento</option>
            </select>
        </div>
        <div>
            <label for="tipo" class="block text-sm font-medium text-gray-700 mb-2">Tipo</label>
            <select name="tipo" id="tipo" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" 
                    required>
                <option value="carga">Carga</option>
                <option value="alimentos">Alimentos</option>
                <option value="crudo">Crudo</option>
            </select>
        </div>
        <div>
            <button type="submit" 
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-md shadow-lg hover:bg-blue-600 hover:scale-105 transition-transform duration-200">
                Guardar
            </button>
        </div>
    </form>
</div>
@endsection
