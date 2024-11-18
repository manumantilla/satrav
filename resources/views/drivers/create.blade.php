@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-6">{{ isset($driver) ? 'Editar Conductor' : 'Nuevo Conductor' }}</h1>

    <form action="{{ isset($conductor) ? route('drivers.update', $conductor->id) : route('drivers.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @if(isset($driver))
            @method('PUT')
        @endif

        <div>
            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $driver->nombre ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
        </div>

        <div>
            <label for="cedula" class="block text-sm font-medium text-gray-700">Cédula</label>
            <input type="text" name="cedula" id="cedula" value="{{ old('cedula', $driver->cedula ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
        </div>

        <div>
            <label for="estado" class="block text-sm font-medium text-gray-700">Estado</label>
            <select name="estado" id="estado" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
                <option value="disponible" {{ (old('estado', $driver->estado ?? '') == 'disponible') ? 'selected' : '' }}>Disponible</option>
                <option value="viaje" {{ (old('estado', $driver->estado ?? '') == 'viaje') ? 'selected' : '' }}>En Viaje</option>
                <option value="descanso" {{ (old('estado', $driver->estado ?? '') == 'descanso') ? 'selected' : '' }}>Descanso</option>
            </select>
        </div>

        <div>
            <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
            <input type="text" name="telefono" id="telefono" value="{{ old('telefono', $driver->telefono ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
        </div>

        <div>
            <label for="correo" class="block text-sm font-medium text-gray-700">Correo</label>
            <input type="email" name="correo" id="correo" value="{{ old('correo', $driver->correo ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
        </div>

        <div>
            <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección</label>
            <input type="text" name="direccion" id="direccion" value="{{ old('direccion', $driver->direccion ?? '') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
        </div>

        <div>
            <label for="comentarios" class="block text-sm font-medium text-gray-700">Comentarios</label>
            <textarea name="comentarios" id="comentarios" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">{{ old('comentarios', $driver->comentarios ?? '') }}</textarea>
        </div>

        <div>
            <label for="licencia_conducir" class="block text-sm font-medium text-gray-700">Licencia de Conducir</label>
            <input type="file" name="licencia_conducir" id="licencia_conducir" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
        </div>

        <div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                {{ isset($driver) ? 'Actualizar' : 'Guardar' }}
            </button>
        </div>
    </form>
</div>
@endsection
