<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistroComportamiento extends Model
{
    //
    protected $table = 'registros_comportamientos'; 
    protected $fillable = [
        'user_id',
        'vehiculo_id',
        'latitud',
        'longitud',
        'tipo',
    ];

    // Relación con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación con el modelo Vehiculo
    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }
}
