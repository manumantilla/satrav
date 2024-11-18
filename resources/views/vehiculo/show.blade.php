@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Vehículo</h1>
    <ul>
        <li><strong>ID Usuario:</strong> {{ $vehiculo->user_id }}</li>
        <li><strong>Matrícula:</strong> {{ $vehiculo->matricula }}</li>
        <li><strong>Marca:</strong> {{ $vehiculo->marca }}</li>
        <li><strong>Modelo:</strong> {{ $vehiculo->modelo }}</li>
        <li><strong>Estado:</strong> {{ $vehiculo->estado }}</li>
        <li><strong>Tipo:</strong> {{ $vehiculo->tipo }}</li>
    </ul>
    <a href="{{ route('vehiculos.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
