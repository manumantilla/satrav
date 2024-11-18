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
        Schema::create('abastecimiento', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehiculo_id')->constrained('vehiculos')->onDelete('cascade'); // Clave foránea a vehicles
            $table->decimal('cantidad_galones', 8, 2); // Cantidad de galones con dos decimales
            $table->decimal('costo', 10, 2); // Costo con dos decimales
            $table->string('lugar'); // Lugar del abastecimiento
            $table->string('comprobante')->nullable(); // Archivo de comprobante (puede ser nulo)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abastecimiento');
    }
};
