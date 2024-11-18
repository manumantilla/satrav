<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parada extends Model
{
    //
    protected $fillable = [
        'vehiculo_id',
        'fecha',
        'clase',
        'tipo',
        'tiempo_aproximado',
    ];
    public function vehiculo(){

       return  $this->belongsTo(Route::class,'vehiculo_id');
    }
}
