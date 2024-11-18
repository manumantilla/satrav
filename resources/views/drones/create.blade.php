@extends('layouts.app')
 @section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('drones.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700">Referencia</label>
                        <input type="text" name="referencia" class="w-full border border-gray-300 p-2 rounded">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Estado</label>
                        <select name="estado" class="w-full border border-gray-300 p-2 rounded">
                            <option value="activo">Activo</option>
                            <option value="mante">Mantenimiento</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Disponibilidad</label>
                        <input type="text" name="disponibilidad" class="w-full border border-gray-300 p-2 rounded">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Batería (%)</label>
                        <input type="number" name="bateria" step="0.1" class="w-full border border-gray-300 p-2 rounded">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Fecha de Mantenimiento</label>
                        <input type="date" name="fecha_mantenimiento" class="w-full border border-gray-300 p-2 rounded">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Comprobante</label>
                        <input type="file" name="comprobante" class="w-full border border-gray-300 p-2 rounded">
                    </div>

                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Guardar
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
