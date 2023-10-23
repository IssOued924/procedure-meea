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
        Schema::create('procedure_base_juridiques', function (Blueprint $table) {
            $table->uuid("procedure_id")->nullable('procedures');
            $table->foreign('procedure_id')->references('uuid')->on('procedures');

            $table->uuid('base_juridique_id')->nullable('base_juridiques');
            $table->foreign('base_juridique_id')->references('uuid')->on('base_juridiques');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procedure_base_juridiques');
    }
};
