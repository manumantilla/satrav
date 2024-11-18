<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivers')->insert([
            [
                'nombre' => 'Juan Perez',
                'cedula' => '3132323123',
                'licencia_conducir' => 'licencia_juan.pdf',
                'estado' => 'disponible',
                'telefono' => '123456789',
                'correo' => 'juan@example.com',
                'direccion' => 'Calle Falsa 123, Ciudad',
                'comentarios' => 'Conductor experimentado en largas distancias.',
                'NSS' => '123-45-6789',
            ],
            [
                'nombre' => 'Maria Lopez',
                'cedula' => '3163322212',
                'licencia_conducir' => 'licencia_maria.pdf',
                'estado' => 'viaje',
                'telefono' => '987654321',
                'correo' => 'maria@example.com',
                'direccion' => 'Av. Siempre Viva 742, Ciudad',
                'comentarios' => 'Experiencia en transporte de carga.',
                'NSS' => '987-65-4321',
            ],
            [
                'nombre' => 'Carlos Ramirez',
                'cedula' => '319087767',
                'licencia_conducir' => 'licencia_carlos.pdf',
                'estado' => 'descanso',
                'telefono' => '1122334455',
                'correo' => 'carlos@example.com',
                'direccion' => 'Calle Real 456, Ciudad',
                'comentarios' => 'Especialista en transporte refrigerado.',
                'NSS' => '456-78-9123',
            ],
            [
                'nombre' => 'Ana Gomez',
                'cedula' => '3112222321',
                'licencia_conducir' => 'licencia_ana.pdf',
                'estado' => 'disponible',
                'telefono' => '5566778899',
                'correo' => 'ana@example.com',
                'direccion' => 'Boulevard Central 789, Ciudad',
                'comentarios' => 'Conductor con 5 años de experiencia.',
                'NSS' => '321-45-6789',
            ],
            [
                'nombre' => 'Luis Fernandez',
                'cedula' => '3339088731',
                'licencia_conducir' => 'licencia_luis.pdf',
                'estado' => 'viaje',
                'telefono' => '6677889900',
                'correo' => 'luis@example.com',
                'direccion' => 'Carrera Principal 102, Ciudad',
                'comentarios' => 'Experto en transporte de materiales peligrosos.',
                'NSS' => '654-32-1987',
            ],
        ]);
    }
}
