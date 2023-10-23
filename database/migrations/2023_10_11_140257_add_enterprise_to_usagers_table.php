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
        Schema::table('usagers', function (Blueprint $table) {
            $table->string('siege_social')->nullable();
            $table->string('boite_postale')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('usagers', function (Blueprint $table) {
            $table->dropColumn('siege_social');
            $table->dropColumn('boite_postale');
        });
    }
};
