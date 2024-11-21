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
        $all = Sensor::all();

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

        return view('sensores.index', compact('sensoresConAlerta','all'));
    }
    public function estadisticas()
    {
        // Contar la cantidad de sensores por tipo
        $datos = Sensor::selectRaw('tipo, COUNT(*) as cantidad')
            ->groupBy('tipo')
            ->get();

        // Pasar los datos a la vista
        return view('sensores.estadisticas', compact('datos'));
    }
}
