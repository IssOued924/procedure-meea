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
        Schema::create('commentaire_p0011_s', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->string("libelle")->nullable();
            $table->string("chemin")->nullable();
            $table->uuid('demande_p0011_id')->nullable();
            $table->foreign('demande_p0011_id')->references('uuid')->on('demande_p0011_s');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaire_p0011_s');
    }
};
