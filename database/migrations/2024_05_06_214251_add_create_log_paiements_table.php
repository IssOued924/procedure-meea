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
        Schema::create('log_paiements', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->string('montant');
            $table->string('action');
            $table->timestamps();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();

            $table->uuid('paiement_id')->nullable('');
            $table->foreign('paiement_id')->references('uuid')->on('paiements');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_paiements');
    }
};
