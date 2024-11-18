<x-app-layout>

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                <!-- Enlace a Drones -->
                <a href="{{ route('drones.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow">
                    Gestionar Drones
                </a>

                <!-- Enlace a Viajes -->
                <a href="{{ route('viajes.index') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow">
                    Gestionar Viajes
                </a>

                <!-- Enlace a Vehículos -->
                <a href="{{ route('vehiculos.index') }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded shadow">
                    Gestionar Vehículos
                </a>

                <!-- Enlace a Pagos -->
                <a href="{{ route('pagos.index') }}" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded shadow">
                    Gestionar Pagos
                </a>

                <!-- Enlace a Conductores -->
                <a href="{{ route('drivers.index') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded shadow">
                    Gestionar Conductores
                </a>

                <!-- Enlace a Abastecimientos -->
                <a href="{{ route('abastecimientos.index') }}" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded shadow">
                    Gestionar Abastecimientos
                </a>

                <!-- Enlace a Paradas -->
                <a href="{{ route('paradas.index') }}" class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded shadow">
                    Gestionar Paradas
                </a>

                <!-- Enlace a Ubicaciones de Vehículo -->
                <a href="{{ route('vehiculo.ubicaciones', ['vehiculo_id' => 1]) }}" class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded shadow">
                    Ver Ubicaciones de Vehículo
                </a>

                <!-- Enlace a Sensores -->
                <a href="{{ route('sensores.index', ['vehiculo' => 1]) }}" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded shadow">
                    Ver Sensores
                </a>
            </div>
        </div>
    </div>
@endsection
</x-app-layout>

