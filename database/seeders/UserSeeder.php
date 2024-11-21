<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Asegúrate de importar DB aquí
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                'name' => 'Philip',
                'email' => 'philip@gmail.com',
                'tipo' => 'admin',
                'email_verified_at' => now(),
                'password' => Hash::make('qwerty123'), // Cambia la contraseña según tus necesidades
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'tipo' => 'admin',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'), // Cambia la contraseña según tus necesidades
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Employee User',
                'email' => 'employee@gmail.com',
                'tipo' => 'empleado',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'pepito',
                'email' => 'driver1@gmail.com',
                'tipo' => 'conductor',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Driver Two',
                'email' => 'driver2@gmail.com',
                'tipo' => 'conductor',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
