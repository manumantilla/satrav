<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistroComportamiento;
class ComportamientoController extends Controller
{
    //
    public function index(){
        $comportamientos = RegistroComportamiento::with(['user', 'vehiculo'])->get(); // Carga relaciones
        return view('comportamientos.index', compact('comportamientos'));
    }
}
