<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('routes')->insert([
            [
            'id' => 1, 
            'nombre' => 'Ruta Norte', 
            'destino' => 'Barranquilla',
            'duracion_promedio' => 13,
            'distancia' => 300.2,
            ],
            [
                'id' => 2, 
                'nombre' => 'Ruta Sur', 
                'destino' => 'Sur Bolivar',
                'duracion_promedio' => 9,
                'distancia' => 230.2,
            ],
            [
                'id' => 3, 
                'nombre' => 'Ruta Centro', 
                'destino' => 'Bogota',
                'duracion_promedio' => 12,
                'distancia' => 400.2,
            ],  
            [
                'id' => 4, 
                'nombre' => 'Ruta Costa', 
                'destino' => 'Santa Marta',
                'duracion_promedio' => 14,
                'distancia' => 409.9,
            ],    
            [
                'id' => 5, 
                'nombre' => 'Ruta Guaca', 
                'destino' => 'Guaca',
                'duracion_promedio' => 4,
                'distancia' => 78.9,
            ],    
        
        ]);
    }
}
