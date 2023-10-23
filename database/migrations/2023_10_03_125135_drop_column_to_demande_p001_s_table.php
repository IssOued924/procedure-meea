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
        Schema::table('demande_p001_s', function (Blueprint $table) {
            // Des champs à supprimer apres
            $table->dropColumn('is_regime_direct');
            $table->dropColumn('is_sous_trait');
            $table->dropColumn('is_agree');
            $table->dropColumn('is_non_agree');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('demande_p001_s', function (Blueprint $table) {
            //
        });
    }
};
