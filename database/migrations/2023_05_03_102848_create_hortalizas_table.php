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
        Schema::create('hortalizas', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('variedad');
            $table->string('familia');
            $table->date('epoca_siembra');
            $table->string('tiempo_germ');
            $table->string('separacion');
            $table->string('riego');
            $table->string('temperatura_hsol');
            $table->string('abonos');
            $table->string('tratamiento');
            $table->string('asociaciones');
            $table->string('imagen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hortalizas');
    }
};
