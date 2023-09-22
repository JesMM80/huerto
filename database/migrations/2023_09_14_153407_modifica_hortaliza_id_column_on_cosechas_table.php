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
        Schema::table('cosechas', function (Blueprint $table) {
            $table->dropForeign('hortaliza_id');
            $table->dropColumn('hortaliza_id');            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cosechas', function (Blueprint $table) {
            $table->dropForeign(['hortaliza_id']);
        });
    }
};
