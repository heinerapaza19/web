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
        Schema::create('sensors', function (Blueprint $table) {
            $table->id(); // Esto equivale a BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY
            $table->string('temperatura');
            $table->string('humedad');
            $table->dateTime('fechatreg')->nullable(); // Esto es lo que querías para fechatreg
            $table->unsignedBigInteger('location_id');

            // Relación foránea
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');

            // Timestamps automáticos
            $table->timestamps(); // Esto crea correctamente created_at y updated_at como TIMESTAMP
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensors');
    }
};
