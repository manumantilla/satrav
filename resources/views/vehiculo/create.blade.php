@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Vehículo</h1>
    <form action="{{ route('vehiculos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="user_id" class="form-label">ID Usuario</label>
            <input type="number" name="user_id" id="user_id" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="matricula" class="form-label">Matrícula</label>
            <input type="text" name="matricula" id="matricula" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" name="marca" id="marca" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo</label>
            <input type="text" name="modelo" id="modelo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" id="estado" class="form-control" required>
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>
                <option value="mantenimiento">Mantenimiento</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <select name="tipo" id="tipo" class="form-control" required>
                <option value="carga">Carga</option>
                <option value="alimentos">Alimentos</option>
                <option value="crudo">Crudo</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
