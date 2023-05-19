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
        Schema::table('siembras', function (Blueprint $table) {
            $table->foreignId('hortaliza_id')->after('cantidad')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('siembras', function (Blueprint $table) {
            $table->dropColumn('hortaliza_id');
        });
    }
};
