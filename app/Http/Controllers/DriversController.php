<?php

namespace App\Http\Controllers;
use App\Models\Driver;

use Illuminate\Http\Request;

class DriversController extends Controller
{
    public function index()
    {
        //
        $drivers = Driver::all();
        return view('drivers.index',compact('drivers'));
    }
    public function create()
    {
        return view('drivers.create');
  
    }
    public function store(Request $request)
    {
      //
      $request ->validate([

      ]);
      
      $driver = new Driver($request->all());
      if($request->hasFile('licencia_conducir')){
          $driver->licencia_conducir = $request->file('licencia_conducir')->store('licencias');
      }
      $drive->save();
      return redirect()->route('drivers.index')->with('success','Conductor Guardado Exitosamente');

    }
    public function show(Driver $driver)
    {
        return view('drivers.show',compact('driver'));
    }
    public function edit(Driver $driver)
    {
        return view('drivers.edit',compact('driver'));        
    }
    public function update(Request $request, Driver $driver)
    {
        $request ->validate([

        ]);
        
        if($request->hasFile('licencia_conducir')){
            if ($driver->licencia_conducir){
                Storage::delete($driver->licencia_conducir);
            }
        }
        $drive->update($request->all());
        return redirect()->route('drivers.index')->with('success','Conductor Actualizado Exitosamente');
  
        
    }
    public function destroy(Driver $driver)
    {
        //
        if($driver->licencia_conducir){
            Storage::delete($driver->licencia_conducir);
        }
        $driver->delete();
        return redirect()->route('drivers.index')->with('success','Conductor Eliminado Correctamente');
    }
}
