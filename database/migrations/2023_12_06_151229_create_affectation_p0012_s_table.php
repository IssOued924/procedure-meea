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
        Schema::create('affectation_p0012_s', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->uuid('agent_id')->nullable();
            $table->foreign('agent_id')->references('uuid')->on('agents');
            $table->uuid('demande_p0012_id')->nullable();
            $table->foreign('demande_p0012_id')->references('uuid')->on('demande_p0012_s');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affectation_p0012_s');
    }
};
