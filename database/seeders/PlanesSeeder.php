<?php

namespace Database\Seeders;
use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PlanesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('planes')->insert([
            [
                'nombre' => 'Camionero Hierro',
                'precio' => 1200000,
                'descripcion' => 'Plan Basico para tu Flota d emaximo 3 vehiculos',
                'limite_vehiculos' => 3,

            ],
            [
                'nombre' => 'Camionero Platino',
                'precio' => 2200000,
                'descripcion' => 'Plan Robusto para tu flota de maximo 5 vehiculos',
                'limite_vehiculos' => 5,

            ],
            [
                'nombre' => 'Camionero Master',
                'precio' => 4400000,
                'descripcion' => 'Plan Compelto para tu Flota de maximo 10 vehiculos',
                'limite_vehiculos' => 10,

            ],
        ]);
    }
}
