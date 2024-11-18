@extends('layouts.app')
@section('content')
    <div class="container mx-auto py-12">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Pricing that grows with you</h1>
        @foreach ($planes as $plan )
            <h1>{{$plan->nombre}}</h1>
                
        @endforeach
        <p class="text-center text-gray-600 mb-6">
            Choose an affordable plan that’s packed with the best features for engaging your audience, creating customer loyalty, and driving sales.
        </p>
        <div class="flex justify-center mb-8">
            <button class="px-4 py-2 bg-indigo-600 text-white rounded-l-md hover:bg-indigo-700">Monthly</button>
            <button class="px-4 py-2 bg-gray-300 text-gray-800 rounded-r-md hover:bg-gray-400">Annually</button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            @foreach ($planes as $plan)
                <div class="bg-white shadow-md rounded-lg p-6 text-center">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $plan->nombre }}</h2>
                    <p class="text-gray-600 mb-4">{{ $plan->descripcion ?? 'No description available' }}</p>
                    <div class="text-4xl font-bold text-indigo-600 mb-4">${{ number_format($plan->precio, 2) }}<span class="text-base font-normal">/month</span></div>
                    <p class="text-gray-600 mb-6">Up to {{ $plan->limite_vehiculos ?? 'unlimited' }} vehicles</p>
                    <button class="w-full py-2 bg-indigo-600 text-white font-bold rounded-md hover:bg-indigo-700">Buy plan</button>
                </div>
            @endforeach
        </div>
    </div>
@endsection