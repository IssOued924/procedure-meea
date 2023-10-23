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
        Schema::create('demande_piece_p009_s', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->string("libelle")->nullable();
            $table->string("chemin")->nullable();

            $table->uuid('piece_jointe_id')->nullable();
            $table->foreign('piece_jointe_id')->references('uuid')->on('piece_jointes');

            $table->uuid('demande_p009_id')->nullable();
            $table->foreign('demande_p009_id')->references('uuid')->on('demande_p009_s');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_piece_p009_s');
    }
};
