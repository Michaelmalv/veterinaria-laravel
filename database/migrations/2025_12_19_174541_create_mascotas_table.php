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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_mascota');
            $table->string('especie');
            $table->string('raza')->nullable();
            $table->integer('edad');
            $table->string('nombre_dueno');
            $table->string('telefono');
            $table->text('observaciones')->nullable();
            $table->boolean('activo')->default(true);
            $table->timestamps(); // fecha_registro automática
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
