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
        Schema::table('demande_p0012_s', function (Blueprint $table) {
            //
            $table->boolean('is_photographique')->default(false);
            $table->boolean('is_touristique')->default(false);
            $table->boolean('is_cinematographique')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('demande_p0012_s', function (Blueprint $table) {
            $table->dropColumn('is_photographique');
            $table->dropColumn('is_touristique');
            $table->dropColumn('is_cinematographique');
        });
    }
};
