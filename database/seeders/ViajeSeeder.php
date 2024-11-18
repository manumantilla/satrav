<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ViajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('viajes')->insert([
            [
                'vehiculo_id' => 1,
                'driver_id' => 1,
                'route_id' => 1,
                'fecha_salida' => Carbon::now()->subDays(10)->format('Y-m-d'),
                'fecha_llegada_estimada' => Carbon::now()->subDays(2)->format('Y-m-d'),
                'fecha_llegada_real' => Carbon::now()->subDays(1)->format('Y-m-d'),
                'adelanto' => 500.00,
                'permiso_carga' => 'permiso1.pdf',
                'carta_porte' => 'carta1.pdf',
                'estado' => 'compo',
                'comentarios' => 'Viaje completado sin problemas.',
                'comprobante' => 'comprobante1.pdf',
                'campo' => 'Observaciones adicionales',
            ],
            [
                'vehiculo_id' => 2,
                'driver_id' => 2,
                'route_id' => 2,
                'fecha_salida' => Carbon::now()->subDays(8)->format('Y-m-d'),
                'fecha_llegada_estimada' => Carbon::now()->subDays(1)->format('Y-m-d'),
                'fecha_llegada_real' => null,
                'adelanto' => 300.00,
                'permiso_carga' => 'permiso2.pdf',
                'carta_porte' => 'carta2.pdf',
                'estado' => 'curso',
                'comentarios' => 'En curso.',
                'comprobante' => null,
                'campo' => 'Entrega anticipada prevista',
            ],
            [
                'vehiculo_id' => 3,
                'driver_id' => 3,
                'route_id' => 3,
                'fecha_salida' => Carbon::now()->subDays(5)->format('Y-m-d'),
                'fecha_llegada_estimada' => Carbon::now()->addDays(2)->format('Y-m-d'),
                'fecha_llegada_real' => null,
                'adelanto' => 700.00,
                'permiso_carga' => 'permiso3.pdf',
                'carta_porte' => 'carta3.pdf',
                'estado' => 'pend',
                'comentarios' => 'A la espera de confirmación de salida.',
                'comprobante' => null,
                'campo' => 'Revisión de ruta pendiente',
            ],
            [
                'vehiculo_id' => 4,
                'driver_id' => 4,
                'route_id' => 4,
                'fecha_salida' => Carbon::now()->subDays(4)->format('Y-m-d'),
                'fecha_llegada_estimada' => Carbon::now()->format('Y-m-d'),
                'fecha_llegada_real' => Carbon::now()->format('Y-m-d'),
                'adelanto' => 250.00,
                'permiso_carga' => 'permiso4.pdf',
                'carta_porte' => 'carta4.pdf',
                'estado' => 'compo',
                'comentarios' => 'Sin incidencias.',
                'comprobante' => 'comprobante4.pdf',
                'campo' => 'Notas adicionales',
            ],
            [
                'vehiculo_id' => 5,
                'driver_id' => 5,
                'route_id' => 2,
                'fecha_salida' => Carbon::now()->subDays(6)->format('Y-m-d'),
                'fecha_llegada_estimada' => Carbon::now()->addDays(3)->format('Y-m-d'),
                'fecha_llegada_real' => null,
                'adelanto' => 400.00,
                'permiso_carga' => 'permiso5.pdf',
                'carta_porte' => 'carta5.pdf',
                'estado' => 'pend',
                'comentarios' => 'Pendiente de iniciar.',
                'comprobante' => null,
                'campo' => 'Revisión de carga',
            ],
        ]);
    }
}
