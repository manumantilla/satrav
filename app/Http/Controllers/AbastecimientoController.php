<?php

namespace App\Http\Controllers;
use App\Models\Abastecimiento;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class AbastecimientoController extends Controller
{
    public function index()
    {
        $abastecimientos = Abastecimiento::with('vehiculo')->get();
        return view('abastecimientos.index', compact('abastecimientos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehiculos = Vehiculo::all();
        return view('abastecimientos.create', compact('vehiculos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'vehiculo_id' => 'required|exists:vehiculos,id',
            'cantidad_galones' => 'required|numeric|min:0',
            'costo' => 'required|numeric|min:0',
            'lugar' => 'required|string|max:255',
            'comprobante' => 'nullable|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $abastecimiento = new Abastecimiento($request->all());

        if ($request->hasFile('comprobante')) {
            $abastecimiento->comprobante = $request->file('comprobante')->store('comprobantes');
        }

        $abastecimiento->save();

        return redirect()->route('abastecimientos.index')
                         ->with('success', 'Abastecimiento creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Abastecimiento $abastecimiento)
    {
        return view('abastecimientos.show', compact('abastecimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Abastecimiento $abastecimiento)
    {
        $vehiculos = Vehiculo::all();
        return view('abastecimientos.edit', compact('abastecimiento', 'vehiculos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Abastecimiento $abastecimiento)
    {
        $request->validate([
            'vehiculo_id' => 'required|exists:vehiculos,id',
            'cantidad_galones' => 'required|numeric|min:0',
            'costo' => 'required|numeric|min:0',
            'lugar' => 'required|string|max:255',
            'comprobante' => 'nullable|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $abastecimiento->fill($request->all());

        if ($request->hasFile('comprobante')) {
            $abastecimiento->comprobante = $request->file('comprobante')->store('comprobantes');
        }

        $abastecimiento->save();

        return redirect()->route('abastecimientos.index')
                         ->with('success', 'Abastecimiento actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Abastecimiento $abastecimiento)
    {
        if ($abastecimiento->comprobante) {
            \Storage::delete($abastecimiento->comprobante);
        }

        $abastecimiento->delete();

        return redirect()->route('abastecimientos.index')
                         ->with('success', 'Abastecimiento eliminado exitosamente.');
    }
}
