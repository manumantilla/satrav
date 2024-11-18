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
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Nombre de la ruta // Clave foránea para el origen (presumiblemente tabla 'locations')
            $table->string('destino'); // Destino de la ruta
            $table->string('duracion_promedio'); // Duración promedio del viaje en la ruta
            $table->float('distancia', 8, 2); // Distancia en kilómetros o millas
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('routes');
    }
};
