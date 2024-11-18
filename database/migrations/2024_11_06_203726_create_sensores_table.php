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
        Schema::create('sensores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehiculo_id')->constrained('vehiculos')->onDelete('cascade');
            $table->enum('tipo',['acelerometro','combustible','gasto','seguridad','frenadas_bruscas']);
            $table->date('fecha_instalacion');
            $table->date('fecha_mantenimiento')->nullable();
            $table->enum('estado',['activo','inactivo','defectuoso']);
            $table->enum('unidad',['km/h','litros','km/l','0/1','cantidad']);
            $table->float('valor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensores');
    }
};
