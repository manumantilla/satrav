@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-6">Detalles del Pago</h1>
    <p><strong>Usuario:</strong> {{ $pago->user->name }}</p>
    <p><strong>Monto Total:</strong> {{ $pago->monto_total }}</p>
    <p><strong>Descripción:</strong> {{ $pago->descripcion }}</p>
    <p><strong>Comprobante:</strong> 
        @if($pago->comprobante)
            <a href="{{ Storage::url($pago->comprobante) }}" target="_blank">Ver comprobante</a>
        @else
            No disponible
        @endif
    </p>
</div>
@endsection
