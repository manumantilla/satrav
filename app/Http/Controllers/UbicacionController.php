<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ubicacion; // Import the Ubicacion model
use App\Models\User;
use App\Models\Driver;
use App\Models\Vehiculo;

use App\Models\Viaje;


class UbicacionController extends Controller
{
        public function mostrarUbicaciones($vehiculo_id)
        {
            //get the specific vehicle
            $vehiculo = Vehiculo::findOrFail($vehiculo_id);

            // Obtener todas las ubicaciones del vehículo específico
            $ubicaciones = Ubicacion::where('vehiculo_id', $vehiculo_id)->get(['latitud', 'longitud', 'time']);
            //get the last ubication
            $viaje = Viaje::where('vehiculo_id',$vehiculo_id)->latest('fecha_salida')->first();
            // Pasar las ubicaciones a la vista
            return view('vehiculo.ubicaciones', compact('ubicaciones','vehiculo','viaje'));
        }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
