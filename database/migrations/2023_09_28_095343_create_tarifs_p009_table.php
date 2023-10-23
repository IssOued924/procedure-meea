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
        Schema::create('tarif_p009_s', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->string("libelle")->nullable();
            $table->bigInteger('cout')->default(0);
            $table->uuid('demande_p009_id')->nullable()->nullable('demande_p009_s');
            $table->foreign('demande_p009_id')->references('uuid')->on('demande_p009_s');
    

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarif_p009_s');
    }
};
