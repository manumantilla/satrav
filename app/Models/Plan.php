<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //
    protected $table = 'planes';

    // Define los campos que se pueden llenar en masa
    protected $fillable = [
        'nombre',
        'precio',
        'descripcion',
        'limite_vehiculos',
    ];
}
