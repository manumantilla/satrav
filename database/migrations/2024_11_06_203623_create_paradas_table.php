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
        Schema::create('paradas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehiculo_id')->constrained('vehiculos')->onDelete('cascade'); // Clave foránea a vehicles
            $table->date('fecha'); // Fecha de la parada
            $table->enum('clase', ['descanso', 'dormir', 'falla', 'trancon']); // Clase de parada
            $table->enum('tipo', ['programada', 'no programada']); // Tipo de parada
            $table->integer('tiempo_aproximado')->nullable(); // Tiempo aproximado en minutos (puede ser nulo)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paradas');
    }
};
