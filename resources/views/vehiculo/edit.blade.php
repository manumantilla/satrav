@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
    <h1 class="text-2xl font-bold mb-6">Editar Vehículo</h1>
    <form action="{{ route('vehiculos.edit',$vehiculo->id) }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="user_id" class="block text-gray-700 font-medium mb-2">ID Usuario</label>
            <input value="{{$vehiculo->usuario_id}}" type="number" name="user_id" id="user_id" 
                class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" 
                required>
        </div>
        <div class="mb-4">
            <label for="matricula" class="block text-gray-700 font-medium mb-2">Matrícula</label>
            <input value="{{$vehiculo->matricula}}" type="text" name="matricula" id="matricula" 
                class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" 
                required>
        </div>
        <div class="mb-4">
            <label for="marca" class="block text-gray-700 font-medium mb-2">Marca</label>
            <input value="{{$vehiculo->marca}}" type="text" name="marca" id="marca" 
                class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" 
                required>
        </div>
        <div class="mb-4">
            <label for="modelo" class="block text-gray-700 font-medium mb-2">Modelo</label>
            <input value="{{$vehiculo->modelo}}" type="text" name="modelo" id="modelo" 
                class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" 
                required>
        </div>
        <div class="mb-4">
            <label for="estado" class="block text-gray-700 font-medium mb-2">Estado</label>
            <select name="estado" id="estado" 
                class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" 
                required>
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>
                <option value="mantenimiento">Mantenimiento</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="tipo" class="block text-gray-700 font-medium mb-2">Tipo</label>
            <select name="tipo" id="tipo" 
                class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" 
                required>
                <option value="carga">Carga</option>
                <option value="alimentos">Alimentos</option>
                <option value="crudo">Crudo</option>
            </select>
        </div>
        <button type="submit" 
            class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-200">
            Guardar
        </button>
    </form>
</div>
@endsection
