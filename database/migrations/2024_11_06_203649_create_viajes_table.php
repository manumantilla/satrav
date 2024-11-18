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
        Schema::create('viajes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehiculo_id')->constrained('vehiculos')->onDelete('cascade'); // Relación con la tabla de vehículos
            $table->foreignId('driver_id')->constrained('drivers')->onDelete('cascade'); // Relación con la tabla de conductores
            $table->foreignId('route_id')->constrained('routes')->onDelete('cascade'); // Relación con la tabla de rutas (presumiendo que existe)
            $table->date('fecha_salida'); // Fecha de salida del viaje
            $table->date('fecha_llegada_estimada'); // Fecha estimada de llegada
            $table->date('fecha_llegada_real')->nullable(); // Fecha real de llegada (opcional)
            $table->decimal('adelanto', 10, 2)->nullable(); // Adelanto en dinero (opcional)
            $table->string('permiso_carga')->nullable(); // Archivo de permiso de carga (opcional)
            $table->string('carta_porte')->nullable(); // Tipo de carta de porte (opcional)
            $table->enum('estado', ['pend', 'curso', 'compo']); // Estado del viaje
            $table->text('comentarios')->nullable(); // Comentarios adicionales (opcional)
            $table->string('comprobante')->nullable(); // Archivo de comprobante (opcional)
            $table->string('campo')->nullable(); // Campo adicional (opcional)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viajes');
    }
};
