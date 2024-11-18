<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dron extends Model
{
    //
    protected $table = 'drones';
    protected $fillable = [
        'referencia',
        'estado',
        'disponibilidad',
        'bateria',
        'fecha_mantenimiento',
        'comprobante',
    ];
}
