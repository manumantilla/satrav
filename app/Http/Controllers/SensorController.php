<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sensor;
use App\Models\Vehiculo;
use Illuminate\Support\Facades\DB;

class SensorController extends Controller
{
    //
    public function index(Vehiculo $vehiculo){
        $sensores = Sensor::where('vehiculo_id', $vehiculo->id)->get();


        $sensoresConAlerta = $sensores->map(function ($sensor) {
            $sensor->alerta = false;
            
            switch ($sensor->tipo) {
                case 'acelerometro':
                    if ($sensor->unidad === 'km/h' && $sensor->valor > 100) {
                        $sensor->alerta = true;
                    }
                    break;

                case 'combustible':
                    if ($sensor->unidad === 'litros' && $sensor->valor < 20) {
                        $sensor->alerta = true;
                    }
                    break;

                case 'gasto':
                    if ($sensor->unidad === 'km/l' && $sensor->valor > 20) {
                        $sensor->alerta = true;
                    }
                    break;

                case 'seguridad':
                    if ($sensor->unidad === '0/1' && $sensor->valor == 0) {
                        $sensor->alerta = true;
                    }
                    break;

                case 'frenadas_bruscas':
                    if ($sensor->unidad === 'cantidad' && $sensor->valor > 2) {
                        $sensor->alerta = true;
                    }
                    break;
            }
            
            return $sensor;
        });

        return view('sensores.index', compact('sensoresConAlerta'));
    }
}
