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
        Schema::table('demande_p0011_s', function (Blueprint $table) {
            $table->string('statut');
            $table->string('superficie')->nullable();
            $table->string('depot');
            $table->string('quantite');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('demande_p0011_s', function (Blueprint $table) {
            $table->dropColumn("statut");
            $table->dropColumn("superficie");
            $table->dropColumn("depot");
            $table->dropColumn("quantite");
        });
    }
};
