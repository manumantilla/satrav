<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Abastecimiento extends Model
{
    //
    protected $table = 'abastecimiento';
    protected $fillable = [
        'vehiculo_id',
        'cantidad_galones',
        'costo',
        'lugar',
        'comprobante',
    ];
    public function vehiculo()
{
    return $this->belongsTo(Vehiculo::class);
}
}
