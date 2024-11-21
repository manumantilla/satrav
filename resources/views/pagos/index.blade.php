@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-6">Lista de Pagos</h1>
    <a href="{{ route('pagos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Nuevo Pago</a>
    
    @if($pagos->isEmpty())
        <p class="mt-6 text-gray-600">No hay pagos registrados.</p>
    @else
        <table class="min-w-full bg-white border border-gray-200 mt-6">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Usuario</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Monto Total</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Descripción</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Comprobante</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-700">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pagos as $pago)
                    <tr>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">{{ optional($pago->user)->name ?? 'Usuario no asignado' }}</td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $pago->monto_total }}</td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">{{ $pago->descripcion }}</td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700">
                            @if($pago->comprobante)
                                <a href="{{ asset('storage/' . $pago->comprobante) }}" target="_blank" class="text-blue-600 hover:underline">
                                    Ver Comprobante
                                </a>
                                <!-- Mostrar como imagen si es necesario -->
                                <img src="{{ asset('storage/' . $pago->comprobante) }}" alt="Comprobante" class="h-16 w-16 object-cover mt-2">
                            @else
                                <span class="text-gray-500">No disponible</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 border-b text-sm text-gray-700 flex space-x-2">
                            <a href="{{ route('pagos.show', $pago->id) }}" class="text-blue-600 hover:underline">Ver</a>
                            <a href="{{ route('pagos.edit', $pago->id) }}" class="text-yellow-600 hover:underline">Editar</a>
                            <form action="{{ route('pagos.destroy', $pago->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
