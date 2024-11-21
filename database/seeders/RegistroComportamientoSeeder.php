<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegistroComportamientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('registros_comportamientos')->insert([
            [
                'user_id' => 1,
                'vehiculo_id' => 1,
                'latitud' => 6.2442,
                'longitud' => -75.5812,
                'tipo' => 'Frenada Brusca',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'vehiculo_id' => 2,
                'latitud' => 4.6097,
                'longitud' => -74.0817,
                'tipo' => 'Velocidad No Permitida',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'vehiculo_id' => 3,
                'latitud' => 3.4372,
                'longitud' => -76.5225,
                'tipo' => 'No Uso de Elementos de Seguridad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'vehiculo_id' => 4,
                'latitud' => 7.1139,
                'longitud' => -73.1198,
                'tipo' => 'Velocidad No Permitida',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'vehiculo_id' => 1,
                'latitud' => 10.9878,
                'longitud' => -74.7889,
                'tipo' => 'Frenada Brusca',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
