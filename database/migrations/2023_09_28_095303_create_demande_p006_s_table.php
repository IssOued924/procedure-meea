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
        Schema::create('demande_p006_s', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->string('libelle_court');
            $table->string('libelle_long')->nullable();
            $table->string('etat')->nullable();
            $table->date('date_demande')->nullable();
            $table->string('identite', 100)->nullable();
            $table->string('beneficiaire')->nullable();
            $table->string('beneficiaire_piece_jointe')->nullable();
            $table->bigInteger('montant')->default(0);
            $table->date('delai')->nullable();
            $table->string('code')->nullable();
            $table->string('email')->nullable();

            $table->string('lieu')->nullable();
            $table->boolean('is_producteur')->default(false);
            $table->boolean('is_distributeur')->default(false);
            $table->boolean('is_importateur')->default(false);
            $table->string('pays_producteur')->nullable();
            $table->string('nom_adresse_producteur')->nullable();
            $table->string('micronage')->nullable();

            $table->double('poids', 15, 8)->default(0.0);
            $table->string('description_physique')->nullable();
            $table->double('quantite_annuel', 15, 8)->default(0.0);

            $table->uuid('user_id')->nullable('');
            $table->foreign('user_id')->references('uuid')->on('users');

            $table->uuid('procedure_id')->nullable('procedures');
            $table->foreign('procedure_id')->references('uuid')->on('procedures');

            $table->uuid('type_demande_id')->nullable();
            $table->foreign('type_demande_id')->references('uuid')->on('type_demandes');

            $table->uuid('commune_id')->nullable();
            $table->foreign('commune_id')->references('uuid')->on('communes');

            $table->boolean('confirmed')->default(false);
            $table->date('date_certif')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_p006_s');
    }
};
