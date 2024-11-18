<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    //
    protected $table = 'sensores';
    public function vehiculo(){
        return $this->belongsTo(Vehiculo::class,'vehiculo_id');
    }
}
