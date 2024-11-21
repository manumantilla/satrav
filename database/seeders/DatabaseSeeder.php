<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(VehiculoSeeder::class);
        $this->call(UbicacionSeeder::class);
        $this->call(RouteSeeder::class);
        $this->call(DriverSeeder::class);
        $this->call(ViajeSeeder::class);
        $this->call(SensorSeeder::class);
        $this->call(DronesSeeder::class);
        $this->call(PlanesSeeder::class);
        $this->call(RegistroComportamientoSeeder::class);


        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
