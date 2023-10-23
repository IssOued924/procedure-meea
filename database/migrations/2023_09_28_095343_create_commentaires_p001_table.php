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
        Schema::create('commentaire_p001_s', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->string("libelle")->nullable();
            $table->string("chemin")->nullable();
            $table->uuid('demande_p001_id')->nullable();
            $table->foreign('demande_p001_id')->references('uuid')->on('demande_p001_s');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaire_p001_s');
    }
};
