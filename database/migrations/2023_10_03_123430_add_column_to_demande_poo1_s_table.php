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
            //
            $table->string('denomination_sociale_demandeur')->nullable();
            $table->string('denomination_sociale_fournisseur')->nullable();
            $table->string('adresse_postale_demandeur')->nullable();
            $table->string('adresse_fournisseur')->nullable();
            $table->string('autre_danger')->nullable();
            $table->string('type_local_stockage_autre')->nullable();
            $table->string('systeme_transport')->nullable();
            $table->string('agrement_transport')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('demande_p001_s', function (Blueprint $table) {
            //
            $table->dropColumn('denomination_sociale_demandeur');
            $table->dropColumn('denomination_sociale_fournisseur');
            $table->dropColumn('adresse_postale_demandeur');
            $table->dropColumn('adresse_fournisseur');
            $table->dropColumn('autre_danger');
            $table->dropColumn('type_local_stockage_autre');
            $table->dropColumn('systeme_transport');
            $table->dropColumn('agrement_transport');

        });
    }
};
