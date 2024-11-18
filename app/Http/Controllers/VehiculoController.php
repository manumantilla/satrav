<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;
use App\Models\Viaje;
use App\Models\Driver;



class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $vehiculos = Vehiculo::all();
        return view('vehiculo.index',compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('vehiculo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'matricula' => 'required|unique:vehicles',
            'marca' => 'required|string',
            'modelo' => 'required|string',
            'estado' => 'required|in:activo,inactivo,mantenimiento',
            'tipo' => 'required|in:carga,alimentos,crudo',
        ]);

        Vehiculo::create($request->all());
        return redirect()->route('vehiculo.index')->with('success', 'Vehículo creado exitosamente.');
    }
    

    public function show(Vehiculo $vehiculo)
    {
        return view('vehiculo.show', compact('vehiculo'));
    }

    // Muestra el formulario para editar un vehículo
    public function edit(Vehiculo $vehiculo)
    {
        return view('vehiculo.edit', compact('vehiculo'));
    }

    // Actualiza el vehículo en la base de datos
    public function update(Request $request, Vehiculo $vehiculo)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'matricula' => 'required|unique:matricula,' . $vehiculo->id,
            'marca' => 'required|string',
            'modelo' => 'required|string',
            'estado' => 'required|in:activo,inactivo,mantenimiento',
            'tipo' => 'required|in:carga,alimentos,crudo',
        ]);

        $vehiculo->update($request->all());
        return redirect()->route('vehiculo.index')->with('success', 'Vehículo actualizado exitosamente.');
    }

    // Elimina un vehículo
    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->delete();
        return redirect()->route('vehiculo.index')->with('success', 'Vehículo eliminado exitosamente.');
    }
}
