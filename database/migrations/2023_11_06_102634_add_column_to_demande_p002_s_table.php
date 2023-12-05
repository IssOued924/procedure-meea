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
        Schema::table('demande_p002_s', function (Blueprint $table) {
            $table->string("domaine");
            $table->string("categorie");
            $table->string("sous_domaine");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('demande_p002_s', function (Blueprint $table) {
            $table->dropColumn('domaine');
            $table->dropColumn('categorie');
            $table->dropColumn('sous_domaine');
        });
    }
};
