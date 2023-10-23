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
        Schema::create('affectation_p0011_s', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->uuid('agent_id')->nullable();
            $table->foreign('agent_id')->references('uuid')->on('agents');
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
        Schema::dropIfExists('affectation_p0011_s');
    }
};
