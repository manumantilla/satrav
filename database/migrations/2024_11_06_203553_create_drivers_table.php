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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Nombre del conductor
            $table->string('cedula')->unique(); // Cédula única
            $table->string('licencia_conducir')->nullable(); // Archivo de licencia de conducir
            $table->enum('estado', ['disponible', 'viaje', 'descanso']); // Estado del conductor
            $table->string('telefono')->nullable(); // Teléfono del conductor
            $table->string('correo')->unique(); // Correo electrónico
            $table->string('direccion')->nullable(); // Dirección del conductor
            $table->text('comentarios')->nullable(); // Comentarios adicionales
            $table->string('NSS')->nullable(); // Número de Seguro Social
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
