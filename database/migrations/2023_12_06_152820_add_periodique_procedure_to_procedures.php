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
        Schema::table('procedures', function (Blueprint $table) {
            $table->date('session_debut')->nullable();
            $table->date('session_fin')->nullable();
            $table->boolean('estperiodique')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('procedures', function (Blueprint $table) {
            $table->date('session_debut')->nullable();
            $table->date('session_fin')->nullable();
            $table->boolean('estperiodique')->default(false);
        });
    }
};
