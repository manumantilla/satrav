<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    //
    protected $fillable = [
        'id',
        'vehiculo_id',
        'driver_id',
        'route_id',
        'fecha_salida',
        'fecha_llegada_estimada',
        'fecha_llegada_real',
        'adelanto',
        'permiso_carga',
        'carta_porte',
        'estado',
        'comentarios',
        'comprobante',
        'campo',
    ];
    public function drivers()
    {
        return $this->belongsTo(Driver::class, 'driver_id');
    }
    public function routes()
    {
        return $this->belongsTo(Route::class, 'route_id');
    }
    public function vehiculos()
    {
        return $this->belongsTo(Route::class, 'vehiculo_id');
    }
}
