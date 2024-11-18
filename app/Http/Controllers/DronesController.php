<?php

namespace App\Http\Controllers;
use App\Models\Dron;
use Illuminate\Http\Request;

class DronesController extends Controller
{
    public function index()
    {
        $drones = Dron::all();
        return view('drones.index',compact('drones'));
    }
    public function create()
    {
        return view('drones.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'referencia' => 'required',
            'estado' => 'required',
            'disponibilidad' => 'required',
            'bateria' => 'required|numeric',
            'fecha_mantenimiento' => 'required|date',
            'comprobante' => 'nullable',
        ]);
        $dron = new Dron($request->all());
        if($request->hasFile('comprobante')){
            $dron->comprobante = $request->file('comprobante')->store('comprobante');
        }
        $dron->save();
        return redirect()->route('drones.index')->with('success','Dron creado exitosamente');
    }

    public function show(Dron $dron)
    {
        return view('drones.show',compact('dron'));
    }
    public function edit(Dron $dron)
    {
        return view('drones.edit',compact('dron'));    
    }
    public function update(Request $request, Dron $dron)
    {
        $request->validate([
        ]);
        if($request->hasFile('comprobante')){
            if($dron->comprobante){
                Storage::delete($dron->comprobante);
            }
        }
        $dron->update($request->all());
        return redirect()->route('drones.index')->with('success','Dron Actualizado Correctamente');  
    }
    public function destroy(Dron $dron)
    {
        if($dron->comprobante){
            Storage::delete($dron->comprobante);
        }
        $dron->delete();
        return redirect()->route('drones.index')->with('success','Dron Eliminado Correctamente');
    }
}
