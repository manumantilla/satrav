<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    //[]
    protected $table = 'ubicacion';

    protected $fillable = [
        'latitud',
        'longitud',
        'vehiculo_id',
    ];
    public function vehiculo(){
        return $this->belongsTo(Vehiculo::class,'vehiculo_id');
    }
}
