<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Asegúrate de importar DB aquí
use Illuminate\Support\Facades\Hash;
class UbicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('ubicacion')->insert([
            // Ruta para Vehiculo 1
            [
                'vehiculo_id' => 1,
                'time' => now()->subMinutes(30),
                'latitud' => 7.119349,
                'longitud' => -73.122741,
                'velocidad' => 50.2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehiculo_id' => 1,
                'time' => now()->subMinutes(28),
                'latitud' => 7.120117,
                'longitud' => -73.123154,
                'velocidad' => 52.4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehiculo_id' => 1,
                'time' => now()->subMinutes(26),
                'latitud' => 7.121037,
                'longitud' => -73.123585,
                'velocidad' => 54.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehiculo_id' => 1,
                'time' => now()->subMinutes(24),
                'latitud' => 7.121874,
                'longitud' => -73.124011,
                'velocidad' => 53.0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehiculo_id' => 1,
                'time' => now()->subMinutes(22),
                'latitud' => 7.122666,
                'longitud' => -73.124392,
                'velocidad' => 55.3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehiculo_id' => 1,
                'time' => now()->subMinutes(20),
                'latitud' => 7.123409,
                'longitud' => -73.124788,
                'velocidad' => 57.8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehiculo_id' => 1,
                'time' => now()->subMinutes(18),
                'latitud' => 7.124225,
                'longitud' => -73.125145,
                'velocidad' => 56.0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehiculo_id' => 1,
                'time' => now()->subMinutes(16),
                'latitud' => 7.125073,
                'longitud' => -73.125526,
                'velocidad' => 54.9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehiculo_id' => 1,
                'time' => now()->subMinutes(14),
                'latitud' => 7.125861,
                'longitud' => -73.125913,
                'velocidad' => 55.7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehiculo_id' => 1,
                'time' => now()->subMinutes(12),
                'latitud' => 7.126661,
                'longitud' => -73.126307,
                'velocidad' => 53.8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        
            // Ruta para Vehiculo 2
            [
                'vehiculo_id' => 2,
                'time' => now()->subMinutes(30),
                'latitud' => 7.125349,
                'longitud' => -73.120011,
                'velocidad' => 51.2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehiculo_id' => 2,
                'time' => now()->subMinutes(28),
                'latitud' => 7.126137,
                'longitud' => -73.120485,
                'velocidad' => 52.0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehiculo_id' => 2,
                'time' => now()->subMinutes(26),
                'latitud' => 7.127005,
                'longitud' => -73.120990,
                'velocidad' => 55.3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehiculo_id' => 2,
                'time' => now()->subMinutes(24),
                'latitud' => 7.127921,
                'longitud' => -73.121411,
                'velocidad' => 54.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehiculo_id' => 2,
                'time' => now()->subMinutes(22),
                'latitud' => 7.128731,
                'longitud' => -73.121874,
                'velocidad' => 56.5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehiculo_id' => 2,
                'time' => now()->subMinutes(20),
                'latitud' => 7.129493,
                'longitud' => -73.122215,
                'velocidad' => 53.3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehiculo_id' => 2,
                'time' => now()->subMinutes(18),
                'latitud' => 7.130215,
                'longitud' => -73.122588,
                'velocidad' => 57.4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehiculo_id' => 2,
                'time' => now()->subMinutes(16),
                'latitud' => 7.130999,
                'longitud' => -73.122994,
                'velocidad' => 54.8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehiculo_id' => 2,
                'time' => now()->subMinutes(14),
                'latitud' => 7.131799,
                'longitud' => -73.123456,
                'velocidad' => 55.6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehiculo_id' => 2,
                'time' => now()->subMinutes(12),
                'latitud' => 7.132589,
                'longitud' => -73.123923,
                'velocidad' => 52.9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
    }
}
