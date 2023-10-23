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
        Schema::table('demande_pieces', function (Blueprint $table) {
            $table->string('last_modified_by')->nullable();
        });
        Schema::table('paiements', function (Blueprint $table) {
            $table->string('last_modified_by')->nullable();
        });
        Schema::table('demande_piece_p001_s', function (Blueprint $table) {
            $table->string('last_modified_by')->nullable();
            
        });
        Schema::table('demande_piece_p002_s', function (Blueprint $table) {
            $table->string('last_modified_by')->nullable();
            
        });
        Schema::table('demande_piece_p003_s', function (Blueprint $table) {
            $table->string('last_modified_by')->nullable();
            
        });
        Schema::table('demande_piece_p004_s', function (Blueprint $table) {
            $table->string('last_modified_by')->nullable();
            
        });
        Schema::table('demande_piece_p005_s', function (Blueprint $table) {
            $table->string('last_modified_by')->nullable();
            
        });
        Schema::table('demande_piece_p006_s', function (Blueprint $table) {
            $table->string('last_modified_by')->nullable();
            
        });
        Schema::table('demande_piece_p007_s', function (Blueprint $table) {
            $table->string('last_modified_by')->nullable();
            
        });
        Schema::table('demande_piece_p008_s', function (Blueprint $table) {
            $table->string('last_modified_by')->nullable();
            
        });
        Schema::table('demande_piece_p009_s', function (Blueprint $table) {
            $table->string('last_modified_by')->nullable();
            
        });
        Schema::table('demande_piece_p0010_s', function (Blueprint $table) {
            $table->string('last_modified_by')->nullable();
            
        });
        Schema::table('demande_piece_p0011_s', function (Blueprint $table) {
            $table->string('last_modified_by')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('demande_pieces', function (Blueprint $table) {
            $table->dropColumn('last_modified_by');
        });
        Schema::table('demande_piece_p001_s', function (Blueprint $table) {
            $table->dropColumn('last_modified_by');
        });
        Schema::table('demande_piece_p002_s', function (Blueprint $table) {
            $table->dropColumn('last_modified_by');
        });
        Schema::table('demande_piece_p003_s', function (Blueprint $table) {
            $table->dropColumn('last_modified_by');
        });
        Schema::table('demande_piece_p004_s', function (Blueprint $table) {
            $table->dropColumn('last_modified_by');
        });
        Schema::table('demande_piece_p005_s', function (Blueprint $table) {
            $table->dropColumn('last_modified_by');
        });
        Schema::table('demande_piece_p006_s', function (Blueprint $table) {
            $table->dropColumn('last_modified_by');
        });
        Schema::table('demande_piece_p007_s', function (Blueprint $table) {
            $table->dropColumn('last_modified_by');
        });
        Schema::table('demande_piece_p008_s', function (Blueprint $table) {
            $table->dropColumn('last_modified_by');
        });
        Schema::table('demande_piece_p009_s', function (Blueprint $table) {
            $table->dropColumn('last_modified_by');
        });
        Schema::table('demande_piece_p0010_s', function (Blueprint $table) {
            $table->dropColumn('last_modified_by');
        });
        Schema::table('demande_piece_p0011_s', function (Blueprint $table) {
            $table->dropColumn('last_modified_by');
        });
        Schema::table('paiements', function (Blueprint $table) {
            $table->dropColumn('last_modified_by');
        });
    }
};
