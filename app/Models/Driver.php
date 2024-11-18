<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    //
    protected $fillable = [
        'id',
        'nombre',	
        'cedula',
        'licencia_conducir',
        'estado',
        'telefono',
        'correo',
        'direccion',
        'comentarios',
        'NSS',
    ];
    public function viajes()
    {
        return $this->hasMany(Viaje::class, 'driver_id');
    }
}
