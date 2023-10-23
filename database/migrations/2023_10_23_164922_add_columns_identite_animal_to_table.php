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
        Schema::table('demande_p004_s', function (Blueprint $table) {
            //
            $table->string("nom_commun")->nullable()->after("code");
            $table->string("nom_scientifique")->nullable()->after("nom_commun");
            $table->string("classe_age_animal")->nullable()->after("nom_scientifique");
            $table->string("sexe_animal")->nullable()->after("classe_age_animal");
            $table->string("lieu_provenance")->nullable()->after("sexe_animal");
            $table->string("condition_acquisition")->nullable()->after("lieu_provenance");
            $table->string("motif_detention")->nullable()->after("condition_acquisition");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('demande_p004_s', function (Blueprint $table) {
            //
        });
    }
};
