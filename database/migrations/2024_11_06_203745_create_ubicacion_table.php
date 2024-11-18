<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ubicacion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehiculo_id')->constrained('vehiculos')->onDelete('cascade'); // Clave foránea a la tabla vehicles
            $table->timestamp('time'); // Tiempo de registro de la ubicación
            $table->decimal('latitud', 10, 7); // Latitud con precisión para coordenadas
            $table->decimal('longitud', 10, 7); // Longitud con precisión para coordenadas
            $table->decimal('velocidad', 8, 2)->nullable(); // Velocidad (opcional)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ubicacion');
    }
};
