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
        Schema::table('regions', function (Blueprint $table) {
            $table->string('code')->nullable();
        });
        Schema::table('provinces', function (Blueprint $table) {
            $table->string('code')->nullable();
        });
        Schema::table('communes', function (Blueprint $table) {
            $table->string('code')->nullable();
        });
        Schema::table('villages', function (Blueprint $table) {
            $table->string('code')->nullable();
        });
        Schema::table('services', function (Blueprint $table) {
            $table->string('code')->nullable();
        });
        Schema::table('structures', function (Blueprint $table) {
            $table->string('code')->nullable();
        });
        Schema::table('piece_jointes', function (Blueprint $table) {
            $table->string('code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('regions', function (Blueprint $table) {
            $table->dropColumn('code');
        });
        Schema::table('provinces', function (Blueprint $table) {
            $table->dropColumn('code');
        });
        Schema::table('communes', function (Blueprint $table) {
            $table->dropColumn('code');
        });
        Schema::table('villages', function (Blueprint $table) {
            $table->dropColumn('code');
        });
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn('code');
        });
        Schema::table('structures', function (Blueprint $table) {
            $table->dropColumn('code');
        });
        Schema::table('piece_jointes', function (Blueprint $table) {
            $table->dropColumn('code');
        });
    }
};
