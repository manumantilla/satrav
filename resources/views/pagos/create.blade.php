@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-6">Nuevo Pago</h1>
    <form action="{{ route('pagos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="user_id" class="block text-sm font-medium text-gray-700">Usuario</label>
            <select name="user_id" id="user_id" class="border border-gray-300 p-2 w-full">
                <!-- Opciones de usuario -->
            </select>
        </div>
        <div class="mb-4">
            <label for="monto_total" class="block text-sm font-medium text-gray-700">Monto Total</label>
            <input type="text" name="monto_total" id="monto_total" class="border border-gray-300 p-2 w-full" required>
        </div>
        <div class="mb-4">
            <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="border border-gray-300 p-2 w-full"></textarea>
        </div>
        <div class="mb-4">
            <label for="comprobante" class="block text-sm font-medium text-gray-700">Comprobante</label>
            <input type="file" name="comprobante" id="comprobante" class="border border-gray-300 p-2 w-full">
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar</button>
    </form>
</div>
@endsection
