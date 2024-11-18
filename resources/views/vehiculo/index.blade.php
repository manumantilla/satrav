@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Vehículos</h1>
    <a href="{{ route('vehiculos.create') }}" class="btn btn-primary">Crear Vehículo</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Matrícula</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Estado</th>
                <th>Tipo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehiculos as $vehicle)
            <tr>
                <td>{{ $vehicle->id }}</td>
                <td>{{ $vehicle->matricula }}</td>
                <td>{{ $vehicle->marca }}</td>
                <td>{{ $vehicle->modelo }}</td>
                <td>{{ $vehicle->estado }}</td>
                <td>{{ $vehicle->tipo }}</td>
                <td>
                    <a href="{{ route('vehiculos.show', $vehicle) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('vehiculos.edit', $vehicle) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('vehiculos.destroy', $vehicle) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
