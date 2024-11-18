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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();   
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relación con la tabla users
            $table->string('matricula')->unique();
            $table->string('marca');
            $table->string('modelo');
            $table->enum('estado', ['activo', 'inactivo', 'mantenimiento']);
            $table->string('soat')->nullable(); // Archivo de soat
            $table->string('tecnomecanica')->nullable(); // Archivo de tecnomecánica
            $table->string('seguro')->nullable(); // Archivo de seguro
            $table->enum('tipo', ['carga', 'alimentos', 'crudo']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
