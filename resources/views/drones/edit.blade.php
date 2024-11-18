@extends('layouts.app')
 @section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('drones.update', $dron->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <!-- Resto de los campos igual al create.blade.php, pero con `value="{{ $dron->campo }}"` en cada input -->
                    <div class="mb-4">
                        <label class="block text-gray-700">Referencia</label>
                        <input type="text" name="referencia" value="{{ $dron->referencia }}" class="w-full border border-gray-300 p-2 rounded">
                    </div>
                    
                    <!-- Los demás campos deben seguir el mismo patrón de rellenar con `value="{{ $dron->campo }}"` -->

                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection