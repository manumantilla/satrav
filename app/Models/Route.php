<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    //
    public function viajes()
    {
        return $this->hasMany(Viaje::class, 'route_id');
    }
    
}
