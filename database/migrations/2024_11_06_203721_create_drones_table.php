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
        Schema::create('drones', function (Blueprint $table) {
            $table->id();
            $table->string('referencia'); // Referencia del dron
            $table->enum('estado', ['activo', 'mante']); // Estado del dron
            $table->string('disponibilidad'); // Disponibilidad del dron
            $table->float('bateria'); // Bateria
            $table->date('fecha_mantenimiento')->nullable(); // Fecha de mantenimiento (opcional)
            $table->string('comprobante')->nullable(); // Archivo de comprobante (opcional)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drones');
    }
};
