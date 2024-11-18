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
        Schema::create('alquiler_drones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dron_id')->constrained('drones')->onDelete('cascade'); // Clave foránea a la tabla drones
            $table->enum('estado', ['activo', 'mante']); // Estado del dron en alquiler
            $table->string('comprobante')->nullable(); // Archivo de comprobante (opcional)
            $table->string('nombre'); // Nombre del cliente o persona que alquila el dron
            $table->string('cedula'); // Cédula del cliente o persona que alquila el dron
            $table->integer('horas'); // Cantidad de horas de alquiler
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alquiler_drones');
    }
};
