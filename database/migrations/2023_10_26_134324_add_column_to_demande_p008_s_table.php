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
        Schema::table('demande_p008_s', function (Blueprint $table) {
            $table->string("reference")->nullable();
            $table->string("output_file")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('demande_p008_s', function (Blueprint $table) {
            $table->dropColumn('reference');
            $table->dropColumn('output_file');
            //
        });
    }
};
