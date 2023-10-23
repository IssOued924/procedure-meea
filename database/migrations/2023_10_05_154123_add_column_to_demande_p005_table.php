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
        Schema::table('demande_p005_s', function (Blueprint $table) {
            //
            $table->string('quantite_produit')->nullable();
            $table->string('adresse_demandeur')->nullable();
            $table->string('immatriculation')->nullable();
            $table->string('duree_parcours')->nullable();
            $table->string('origine_produit')->nullable();
            $table->string('destination_produit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('demande_p005_s', function (Blueprint $table) {
            //
            $table->dropColumn('quantite_produit');
            $table->dropColumn('adresse_demandeur');
            $table->dropColumn('immatriculation');
            $table->dropColumn('duree_parcours');
            $table->dropColumn('origine_produit');
            $table->dropColumn('destination_produit');
        });
    }
};
