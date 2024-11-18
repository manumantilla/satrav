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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Clave foránea a la tabla users
            $table->decimal('monto_total', 10, 2); // Monto total del pago
            $table->text('descripcion')->nullable(); // Descripción del pago (opcional)
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
        Schema::dropIfExists('pagos');
    }
};
