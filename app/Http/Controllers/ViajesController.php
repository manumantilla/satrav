<?php

namespace App\Http\Controllers;
use App\Models\Viaje;
use Illuminate\Http\Request;

class ViajesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $viajes = Viaje::with(['drivers', 'routes','vehiculos'])->get();
        return view('viajes.index',compact('viajes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('viajes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'vehciulo_id' => 'required',
            'driver_id' => 'required',
            'route_id' => 'required',
            'fecha_salida' => 'required',
            'fecha_llegada_estimada' => 'required',
            'fecha_llegada_real' => 'nullable',
            'adelanto' => 'nullable',
            'permiso_carga' => 'nullable',
            'carta_porte' => 'nullable',
            'estado' => 'required',
            'comentarios' => 'nullable',
            'comprobante' =>'nullable',
        ]);

        Viaje::create($request->all());
        return redirect()->route('viajes.index')->with('success', 'Viaje creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Viaje $viaje)
    {   
        return view('viajes.show',compact('viaje'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Viaje $viaje)
    {
        return view('viajes.edit',compact('viaje'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehiculo $vehiculo)
    {
        //
        $request->validate([
            'vehciulo_id' => 'required',
            'driver_id' => 'required',
            'route_id' => 'required',
            'fecha_salida' => 'required',
            'fecha_llegada_estimada' => 'required',
            'fecha_llegada_real' => 'nullable',
            'adelanto' => 'required',
            'permiso_carga' => 'nullable',
            'carta_porte' => 'nullable',
            'estado' => 'required',
            'comentarios' => 'nullable',
            'comprobante' =>'nullable',
        ]);
        
        Viaje->update($request->all());
        return redirect()->route('viajes.index')->with('success','Viaje Actualizado Correctamente');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Viaje $viaje)
    {
        //
        $viaje -> delete();
        return redirect()->route('viajes.index')->with('success','Viaje Eliminado');
    }
}
