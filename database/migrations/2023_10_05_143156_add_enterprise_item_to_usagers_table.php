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
            $table->string('rccm')->nullable();
            $table->string('ifu')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('usagers', function (Blueprint $table) {
            $table->dropColumn('rccm');
            $table->dropColumn('ifu');
        });
    }
};
