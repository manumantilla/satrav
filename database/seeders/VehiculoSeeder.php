<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehiculo;
use App\Models\User;
use Illuminate\Support\Facades\DB; // Asegúrate de importar DB aquí


class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehiculos')->insert([
            [
                'user_id' => 1,
                'matricula' => 'ABC123',
                'marca' => 'Kenworth',
                'modelo' => 'T800',
                'estado' => 'activo',
                'soat' => 'soat_abc123.pdf',
                'tecnomecanica' => 'tecno_abc123.pdf',
                'seguro' => 'seguro_abc123.pdf',
                'tipo' => 'carga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'matricula' => 'DEF456',
                'marca' => 'Kenworth',
                'modelo' => 'W900',
                'estado' => 'mantenimiento',
                'soat' => 'soat_def456.pdf',
                'tecnomecanica' => 'tecno_def456.pdf',
                'seguro' => 'seguro_def456.pdf',
                'tipo' => 'alimentos',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'matricula' => 'GHI789',
                'marca' => 'Kenworth',
                'modelo' => 'T680',
                'estado' => 'inactivo',
                'soat' => 'soat_ghi789.pdf',
                'tecnomecanica' => 'tecno_ghi789.pdf',
                'seguro' => 'seguro_ghi789.pdf',
                'tipo' => 'crudo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'matricula' => 'LUK607',
                'marca' => 'Kenworth',
                'modelo' => 'T880',
                'estado' => 'activo',
                'soat' => 'soat_ghi789.pdf',
                'tecnomecanica' => 'tecno_ghi789.pdf',
                'seguro' => 'seguro_ghi789.pdf',
                'tipo' => 'carga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'matricula' => 'HFN066',
                'marca' => 'Kenworth',
                'modelo' => 'T680',
                'estado' => 'inactivo',
                'soat' => 'soat_ghi789.pdf',
                'tecnomecanica' => 'tecno_ghi789.pdf',
                'seguro' => 'seguro_ghi789.pdf',
                'tipo' => 'alimentos',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'matricula' => 'POL221',
                'marca' => 'Kenworth',
                'modelo' => 'T800',
                'estado' => 'activo',
                'soat' => 'soat_ghi789.pdf',
                'tecnomecanica' => 'tecno_ghi789.pdf',
                'seguro' => 'seguro_ghi789.pdf',
                'tipo' => 'carga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
