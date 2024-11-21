<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class PagosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pagos')->insert([
            [
                'user_id' => 1,
                'monto_total' => 250000.00,
                'descripcion' => 'Pago inicial por servicios de transporte.',
                'comprobante' => 'comprobante_pago1.pdf',
                'campo' => 'N/A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'monto_total' => 150000.00,
                'descripcion' => 'Pago por servicio de carga adicional.',
                'comprobante' => 'comprobante_pago2.pdf',
                'campo' => 'Urgente',
                'created_at' => now()->subDays(2),
                'updated_at' => now()->subDays(2),
            ],
            [
                'user_id' => 3,
                'monto_total' => 50000.00,
                'descripcion' => 'Pago por revisión técnica de vehículos.',
                'comprobante' => null, // Sin comprobante
                'campo' => 'Pago parcial',
                'created_at' => now()->subDays(5),
                'updated_at' => now()->subDays(5),
            ],
            [
                'user_id' => 1,
                'monto_total' => 100000.00,
                'descripcion' => 'Pago por servicios de mantenimiento.',
                'comprobante' => 'comprobante_pago3.pdf',
                'campo' => 'Prioridad baja',
                'created_at' => now()->subDays(10),
                'updated_at' => now()->subDays(10),
            ],
            [
                'user_id' => 4,
                'monto_total' => 300000.00,
                'descripcion' => 'Pago anual de membresía.',
                'comprobante' => 'comprobante_pago4.pdf',
                'campo' => 'Promoción especial',
                'created_at' => now()->subDays(15),
                'updated_at' => now()->subDays(15),
            ],
            [
                'user_id' => 2,
                'monto_total' => 200000.00,
                'descripcion' => 'Pago por servicio de monitoreo premium.',
                'comprobante' => null,
                'campo' => 'N/A',
                'created_at' => now()->subDays(20),
                'updated_at' => now()->subDays(20),
            ],
            [
                'user_id' => 5,
                'monto_total' => 75000.00,
                'descripcion' => 'Pago por asesoría técnica.',
                'comprobante' => 'comprobante_pago5.pdf',
                'campo' => 'Urgente',
                'created_at' => now()->subDays(25),
                'updated_at' => now()->subDays(25),
            ],
            [
                'user_id' => 3,
                'monto_total' => 125000.00,
                'descripcion' => 'Pago por consulta especializada.',
                'comprobante' => 'comprobante_pago6.pdf',
                'campo' => 'Prioridad alta',
                'created_at' => now()->subDays(30),
                'updated_at' => now()->subDays(30),
            ],
        ]);
    }
}
