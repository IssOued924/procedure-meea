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
        Schema::create('paiements', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->string("ref_paiement")->nullable();
            $table->string("type_paiement")->nullable();
            $table->date("date_paiement")->nullable();

            $table->uuid('mode_paiement_id')->nullable();
            $table->foreign('mode_paiement_id')->references('uuid')->on('mode_paiements');

            $table->uuid('demande_id')->nullable();
            $table->uuid('code_procedure')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
