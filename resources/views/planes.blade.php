@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold text-center mb-10">Nuestro Planes en Satrav</h1>

        @if($planes->isEmpty())
            <p class="text-center text-gray-600">No hay planes disponibles.</p>
        @else
            <div class="flex justify-center items-center space-x-6">
                @foreach($planes as $plan)
                    <div class="w-80 bg-white border rounded-lg shadow-md p-6 transform transition duration-300 hover:scale-105">
                        <h2 class="text-lg font-semibold mb-2 text-center text-gray-800">{{ $plan->nombre }}</h2>
                        <p class="text-center text-gray-600 text-sm mb-4">{{ $plan->descripcion }}</p>
                        <p class="text-center text-3xl font-bold text-blue-600 mb-6">${{ number_format($plan->precio) }}</p>
                        @if($plan->limite_vehiculos)
                            <p class="text-center text-gray-500 text-sm mb-4">Límite de vehículos: {{ $plan->limite_vehiculos }}</p>
                        @endif
                        <div class="text-center">
    <a href="{{ route('pagos.index') }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-300">Choose Plan</a>
</div>

                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
