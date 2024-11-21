<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SensorSeeder extends Seeder
{
    public function run()
    {
        DB::table('sensores')->insert([
            [
                'id' => 1,
                'vehiculo_id' => 1,
                'tipo' => 'acelerometro',
                'fecha_instalacion' => '2024-01-10',
                'fecha_mantenimiento' => '2024-06-10',
                'estado' => 'activo',
                'unidad' => 'km/h',
                'valor' => 105 // Ejemplo para activar alerta
            ],
            [
                'id' => 2,
                'vehiculo_id' => 1,
                'tipo' => 'combustible',
                'fecha_instalacion' => '2024-01-12',
                'fecha_mantenimiento' => '2024-07-12',
                'estado' => 'activo',
                'unidad' => 'litros',
                'valor' => 15 // Ejemplo para activar alerta
            ],
            [
                'id' => 3,
                'vehiculo_id' => 2,
                'tipo' => 'gasto',
                'fecha_instalacion' => '2024-02-05',
                'fecha_mantenimiento' => '2024-08-05',
                'estado' => 'activo',
                'unidad' => 'km/l',
                'valor' => 22 // Ejemplo para activar alerta
            ],
            [
                'id' => 4,
                'vehiculo_id' => 2,
                'tipo' => 'seguridad',
                'fecha_instalacion' => '2024-03-15',
                'fecha_mantenimiento' => '2024-09-15',
                'estado' => 'activo',
                'unidad' => '0/1',
                'valor' => 0 // Ejemplo para activar alerta
            ],
            [
                'id' => 5,
                'vehiculo_id' => 3,
                'tipo' => 'frenadas_bruscas',
                'fecha_instalacion' => '2024-04-20',
                'fecha_mantenimiento' => '2024-10-20',
                'estado' => 'activo',
                'unidad' => 'cantidad',
                'valor' => 3 // Ejemplo para activar alerta
            ],
            [
                'id' => 6,
                'vehiculo_id' => 3,
                'tipo' => 'acelerometro',
                'fecha_instalacion' => '2024-05-15',
                'fecha_mantenimiento' => '2024-11-15',
                'estado' => 'activo',
                'unidad' => 'km/h',
                'valor' => 85 // Sin alerta
            ],
            [
                'id' => 7,
                'vehiculo_id' => 4,
                'tipo' => 'combustible',
                'fecha_instalacion' => '2024-02-10',
                'fecha_mantenimiento' => '2024-08-10',
                'estado' => 'defectuoso',
                'unidad' => 'litros',
                'valor' => 50 // Sin alerta
            ],
            [
                'id' => 8,
                'vehiculo_id' => 4,
                'tipo' => 'gasto',
                'fecha_instalacion' => '2024-03-01',
                'fecha_mantenimiento' => '2024-09-01',
                'estado' => 'inactivo',
                'unidad' => 'km/l',
                'valor' => 18 // Sin alerta
            ],
            [
                'id' => 9,
                'vehiculo_id' => 5,
                'tipo' => 'seguridad',
                'fecha_instalacion' => '2024-06-10',
                'fecha_mantenimiento' => '2024-12-10',
                'estado' => 'activo',
                'unidad' => '0/1',
                'valor' => 1 // Sin alerta
            ],
            [
                'id' => 10,
                'vehiculo_id' => 5,
                'tipo' => 'frenadas_bruscas',
                'fecha_instalacion' => '2024-07-20',
                'fecha_mantenimiento' => '2024-12-20',
                'estado' => 'activo',
                'unidad' => 'cantidad',
                'valor' => 1 // Sin alerta
            ],
            [
                'id' => 11,
                'vehiculo_id' => 6,
                'tipo' => 'acelerometro',
                'fecha_instalacion' => '2024-01-30',
                'fecha_mantenimiento' => '2024-06-30',
                'estado' => 'activo',
                'unidad' => 'km/h',
                'valor' => 110 // Activará alerta
            ],
            [
                'id' => 12,
                'vehiculo_id' => 6,
                'tipo' => 'combustible',
                'fecha_instalacion' => '2024-01-25',
                'fecha_mantenimiento' => '2024-07-25',
                'estado' => 'activo',
                'unidad' => 'litros',
                'valor' => 10 // Activará alerta
            ],
            [
                'id' => 13,
                'vehiculo_id' => 5,
                'tipo' => 'gasto',
                'fecha_instalacion' => '2024-02-15',
                'fecha_mantenimiento' => '2024-08-15',
                'estado' => 'activo',
                'unidad' => 'km/l',
                'valor' => 25 // Activará alerta
            ],
            [
                'id' => 14,
                'vehiculo_id' => 5,
                'tipo' => 'seguridad',
                'fecha_instalacion' => '2024-03-10',
                'fecha_mantenimiento' => '2024-09-10',
                'estado' => 'activo',
                'unidad' => '0/1',
                'valor' => 0 // Activará alerta
            ],
            [
                'id' => 15,
                'vehiculo_id' => 5,
                'tipo' => 'frenadas_bruscas',
                'fecha_instalacion' => '2024-04-05',
                'fecha_mantenimiento' => '2024-10-05',
                'estado' => 'activo',
                'unidad' => 'cantidad',
                'valor' => 4 // Activará alerta
            ],
        ]);
    }
}

