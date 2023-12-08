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
        Schema::table('demande_p001_s', function (Blueprint $table) {
            $table->string('commentaire')->nullable();
        });
        Schema::table('demande_p002_s', function (Blueprint $table) {
            $table->string('commentaire')->nullable();
        });
        Schema::table('demande_p003_s', function (Blueprint $table) {
            $table->string('commentaire')->nullable();
        });
        Schema::table('demande_p004_s', function (Blueprint $table) {
            $table->string('commentaire')->nullable();
        });
        Schema::table('demande_p005_s', function (Blueprint $table) {
            $table->string('commentaire')->nullable();
        });
        Schema::table('demande_p006_s', function (Blueprint $table) {
            $table->string('commentaire')->nullable();
        });
        Schema::table('demande_p007_s', function (Blueprint $table) {
            $table->string('commentaire')->nullable();
        });
        Schema::table('demande_p008_s', function (Blueprint $table) {
            $table->string('commentaire')->nullable();
        });
        Schema::table('demande_p009_s', function (Blueprint $table) {
            $table->string('commentaire')->nullable();
        });
        Schema::table('demande_p0010_s', function (Blueprint $table) {
            $table->string('commentaire')->nullable();
        });
        Schema::table('demande_p0011_s', function (Blueprint $table) {
            $table->string('commentaire')->nullable();
        });
        Schema::table('demande_p0012_s', function (Blueprint $table) {
            $table->string('commentaire')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('demande_p001_s', function (Blueprint $table) {
            $table->dropColumn('commentaire');
        });
        Schema::table('demande_p002_s', function (Blueprint $table) {
            $table->dropColumn('commentaire');
        });
        Schema::table('demande_p003_s', function (Blueprint $table) {
            $table->dropColumn('commentaire');
        });
        Schema::table('demande_p004_s', function (Blueprint $table) {
            $table->dropColumn('commentaire');
        });
        Schema::table('demande_p005_s', function (Blueprint $table) {
            $table->dropColumn('commentaire');
        });
        Schema::table('demande_p006_s', function (Blueprint $table) {
            $table->dropColumn('commentaire');
        });
        Schema::table('demande_p007_s', function (Blueprint $table) {
            $table->dropColumn('commentaire');
        });
        Schema::table('demande_p008_s', function (Blueprint $table) {
            $table->dropColumn('commentaire');
        });
        Schema::table('demande_p009_s', function (Blueprint $table) {
            $table->dropColumn('commentaire');
        });
        Schema::table('demande_p0010_s', function (Blueprint $table) {
            $table->dropColumn('commentaire');
        });
        Schema::table('demande_p0011_s', function (Blueprint $table) {
            $table->dropColumn('commentaire');
        });
        Schema::table('demande_p0012_s', function (Blueprint $table) {
            $table->dropColumn('commentaire');
        });
    }
};
