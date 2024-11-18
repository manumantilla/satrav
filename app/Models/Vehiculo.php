<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    //
    protected $fillable = [
        'id',
        'user_id',
        'matricula',
        'marca',
        'modelo',
        'estado',
        'soat',
        'tecnomecanica',
        'seguro',
        'tipo',
    ];
    public function dueno(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function sensor(){
        return $this->hasMany(Sensor::class);
    }
    public function ubicacion(){
        return $this->hasMany(Ubicacion::class);
    }
}
