<?php

namespace App\Http\Controllers;
use App\Models\Parada;
use Illuminate\Http\Request;

class ParadaController extends Controller
{
    public function index()
    {
        $paradas = Parada::with('vehiculo')->get();
        return view('paradas.index',compact('paradas'));
    }
    public function create()
    {
        return view('paradas.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'vehiculo_id' => 'required',
            'fecha' => 'required',
            'clase' => 'required|in:descanso,dormir,falla,trancon',
            'tipo'=>'required',
            'tiempo_aproximado',
        ]);
        Parada::create($request->all());
        return redirect()->route('paradas.index')->with('success','Para creada exitosamente');
    }
    public function show(Parada $parada)
    {
        return view('paradas.show', compact('parada'));
    }
    public function edit(Parada $parada)
    {
        //
        return view('paradas.edit', compact('parada'));
    }
    public function update(Request $request, Parada $parada)
    {
        $request->validate([
            'vehiculo_id' => 'required|exists:vehiculos,id',
            'fecha' => 'required|date',
            'clase' => 'required|in:descanso,dormir,falla,trancon',
            'tipo' => 'required|in:programada,no programada',
            'tiempo_aproximado' => 'nullable|integer',
        ]);

        $parada->update($request->all());

        return redirect()->route('paradas.index')->with('success', 'Parada actualizada exitosamente.');
    }
    public function destroy(Parada $parada)
    {
        $parada->delete();
        return redirect()->route('paradas.index')->with('success', 'Parada eliminada exitosamente.');
    }
}
