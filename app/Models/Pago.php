<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    //
    protected $fillable = [
        'user_id',
        'monto_total',
        'descripcion',
        'comprobante',
        'campo',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}

