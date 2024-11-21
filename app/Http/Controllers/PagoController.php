<?php

namespace App\Http\Controllers;

use App\Models\Pago;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class PagoController extends Controller
{
    public function mostrarPlanes()
    {
        $planes = Plan::all(); // Obtiene todos los planes
        return view('planes', compact('planes'));
    }
    public function index()
    {
        //
        $pagos = Pago::all();
        return view('pagos.index', compact('pagos'));
    }

    public function create()
    {
        //
        return view('pagos.create');
    }

    public function store(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'monto_total' => 'required|numeric',
            'descripcion' => 'nullable|string',
            'comprobante' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048', // Validar tipos de archivo y tamaño
            'campo' => 'nullable|string',
        ]);
    
        // Crear una instancia de Pago
        $pago = new Pago($request->all());
    
        // Verificar si hay un archivo para guardar
        if ($request->hasFile('comprobante')) {
            $pago->comprobante = $request->file('comprobante')->store('comprobantes', 'public');
        }
    
        // Guardar el pago
        $pago->save();
    
        // Redirigir con un mensaje de éxito
        return redirect()->route('pagos.index')->with('success', 'Pago Creado Exitosamente');
    }
    
    public function show(Pago $pago)
    {
        return view('pagos.show', compact('pago'));
    }
        
    public function edit(Pago $pago)
    {
        return view('pagos.edit', compact('pago'));
    }

    public function update(Request $request, Pago $pago)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'monto_total' => 'required|numeric',
            'descripcion' => 'nullable|string',
            'comprobante' => 'nullable|file',
            'campo' => 'nullable|string',
        ]);

        if ($request->hasFile('comprobante')) {
            if ($pago->comprobante) {
                Storage::delete($pago->comprobante);
            }
            $pago->comprobante = $request->file('comprobante')->store('comprobantes');
        }

        $pago->update($request->all());

        return redirect()->route('pagos.index')->with('success', 'Pago actualizado exitosamente');
    }

    public function destroy(Pago $pago)
    {
        if ($pago->comprobante) {
            Storage::delete($pago->comprobante);
        }

        $pago->delete();

        return redirect()->route('pagos.index')->with('success', 'Pago eliminado exitosamente');
    }
}
