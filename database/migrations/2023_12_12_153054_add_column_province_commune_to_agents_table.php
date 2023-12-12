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
        Schema::table('agents', function (Blueprint $table) {
            $table->string('province_id')->nullable();
            $table->string('commune_id')->nullable();
            $table->foreign('province_id')->references('uuid')->on('provinces')->onDelete('cascade');
            $table->foreign('commune_id')->references('uuid')->on('communes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('agents', function (Blueprint $table) {
            $table->dropColumn('province_id');
            $table->dropColumn('commune_id');
        });
    }
};
