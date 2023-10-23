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
        Schema::table('demandes', function (Blueprint $table) {
            $table->dropForeign('demandes_user_id_foreign');
            $table->dropColumn('user_id');
            $table->uuid('usager_id')->nullable();
            $table->foreign('usager_id')->references('uuid')->on('usagers');
            $table->string('last_modified_by')->nullable();
            $table->boolean('is_certified')->default(false);
            $table->dropColumn('confirmed');
            $table->string('adresse_beneficiaire')->nullable();
        });
        Schema::table('demande_p001_s', function (Blueprint $table) {
            $table->dropForeign('demande_p001_s_user_id_foreign');
            $table->dropColumn('user_id');
            $table->uuid('usager_id')->nullable();
            $table->foreign('usager_id')->references('uuid')->on('usagers');
            $table->string('last_modified_by')->nullable();
            $table->boolean('is_certified')->default(false);
            $table->dropColumn('confirmed');
            $table->string('adresse_beneficiaire')->nullable();
        });
        Schema::table('demande_p002_s', function (Blueprint $table) {
            $table->dropForeign('demande_p002_s_user_id_foreign');
            $table->dropColumn('user_id');
            $table->uuid('usager_id')->nullable();
            $table->foreign('usager_id')->references('uuid')->on('usagers');
            $table->string('last_modified_by')->nullable();
            $table->boolean('is_certified')->default(false);
            $table->dropColumn('confirmed');
            $table->string('adresse_beneficiaire')->nullable();
        });
        Schema::table('demande_p003_s', function (Blueprint $table) {
            $table->dropForeign('demande_p003_s_user_id_foreign');
            $table->dropColumn('user_id');
            $table->uuid('usager_id')->nullable();
            $table->foreign('usager_id')->references('uuid')->on('usagers');
            $table->string('last_modified_by')->nullable();
            $table->boolean('is_certified')->default(false);
            $table->dropColumn('confirmed');
            $table->string('adresse_beneficiaire')->nullable();
        });
        Schema::table('demande_p004_s', function (Blueprint $table) {
            $table->dropForeign('demande_p004_s_user_id_foreign');
            $table->dropColumn('user_id');
            $table->uuid('usager_id')->nullable();
            $table->foreign('usager_id')->references('uuid')->on('usagers');
            $table->string('last_modified_by')->nullable();
            $table->boolean('is_certified')->default(false);
            $table->dropColumn('confirmed');
            $table->string('adresse_beneficiaire')->nullable();
        });
        Schema::table('demande_p005_s', function (Blueprint $table) {
            $table->dropForeign('demande_p005_s_user_id_foreign');
            $table->dropColumn('user_id');
            $table->uuid('usager_id')->nullable();
            $table->foreign('usager_id')->references('uuid')->on('usagers');
            $table->string('last_modified_by')->nullable();
            $table->boolean('is_certified')->default(false);
            $table->dropColumn('confirmed');
            $table->string('adresse_beneficiaire')->nullable();
        });
        Schema::table('demande_p006_s', function (Blueprint $table) {
            $table->dropForeign('demande_p006_s_user_id_foreign');
            $table->dropColumn('user_id');
            $table->uuid('usager_id')->nullable();
            $table->foreign('usager_id')->references('uuid')->on('usagers');
            $table->string('last_modified_by')->nullable();
            $table->boolean('is_certified')->default(false);
            $table->dropColumn('confirmed');
            $table->string('adresse_beneficiaire')->nullable();
        });
        Schema::table('demande_p007_s', function (Blueprint $table) {
            $table->dropForeign('demande_p007_s_user_id_foreign');
            $table->dropColumn('user_id');
            $table->uuid('usager_id')->nullable();
            $table->foreign('usager_id')->references('uuid')->on('usagers');
            $table->string('last_modified_by')->nullable();
            $table->boolean('is_certified')->default(false);
            $table->dropColumn('confirmed');
            $table->string('adresse_beneficiaire')->nullable();
        });
        Schema::table('demande_p008_s', function (Blueprint $table) {
            $table->dropForeign('demande_p008_s_user_id_foreign');
            $table->dropColumn('user_id');
            $table->uuid('usager_id')->nullable();
            $table->foreign('usager_id')->references('uuid')->on('usagers');
            $table->string('last_modified_by')->nullable();
            $table->boolean('is_certified')->default(false);
            $table->dropColumn('confirmed');
            $table->string('adresse_beneficiaire')->nullable();
        });
        Schema::table('demande_p009_s', function (Blueprint $table) {
            $table->dropForeign('demande_p009_s_user_id_foreign');
            $table->dropColumn('user_id');
            $table->uuid('usager_id')->nullable();
            $table->foreign('usager_id')->references('uuid')->on('usagers');
            $table->string('last_modified_by')->nullable();
            $table->boolean('is_certified')->default(false);
            $table->dropColumn('confirmed');
            $table->string('adresse_beneficiaire')->nullable();
        });
        Schema::table('demande_p0010_s', function (Blueprint $table) {
            $table->dropForeign('demande_p0010_s_user_id_foreign');
            $table->dropColumn('user_id');
            $table->uuid('usager_id')->nullable();
            $table->foreign('usager_id')->references('uuid')->on('usagers');
            $table->string('last_modified_by')->nullable();
            $table->boolean('is_certified')->default(false);
            $table->dropColumn('confirmed');
            $table->string('adresse_beneficiaire')->nullable();
        });
        Schema::table('demande_p0011_s', function (Blueprint $table) {
            $table->dropForeign('demande_p0011_s_user_id_foreign');
            $table->dropColumn('user_id');
            $table->uuid('usager_id')->nullable();
            $table->foreign('usager_id')->references('uuid')->on('usagers');
            $table->string('last_modified_by')->nullable();
            $table->boolean('is_certified')->default(false);
            $table->dropColumn('confirmed');
            $table->string('adresse_beneficiaire')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('demandes', function (Blueprint $table) {
            $table->uuid('user_id')->nullable();
            $table->foreign('user_id')->references('uuid')->on('users');
            $table->boolean('confirmed')->default(false);
            $table->dropColumn('last_modified_by');
        });
        Schema::table('demande_p001_s', function (Blueprint $table) {
            $table->uuid('user_id')->nullable();
            $table->foreign('user_id')->references('uuid')->on('users');
            $table->boolean('confirmed')->default(false);
            $table->dropColumn('last_modified_by');
        });
        Schema::table('demande_p002_s', function (Blueprint $table) {
            $table->uuid('user_id')->nullable();
            $table->foreign('user_id')->references('uuid')->on('users');
            $table->boolean('confirmed')->default(false);
            $table->dropColumn('last_modified_by');
        });
        Schema::table('demande_p003_s', function (Blueprint $table) {
            $table->uuid('user_id')->nullable();
            $table->foreign('user_id')->references('uuid')->on('users');
            $table->boolean('confirmed')->default(false);
            $table->dropColumn('last_modified_by');
        });
        Schema::table('demande_p004_s', function (Blueprint $table) {
            $table->uuid('user_id')->nullable();
            $table->foreign('user_id')->references('uuid')->on('users');
            $table->boolean('confirmed')->default(false);
            $table->dropColumn('last_modified_by');
        });
        Schema::table('demande_p005_s', function (Blueprint $table) {
            $table->uuid('user_id')->nullable();
            $table->foreign('user_id')->references('uuid')->on('users');
            $table->boolean('confirmed')->default(false);
            $table->dropColumn('last_modified_by');
        });
        Schema::table('demande_p006_s', function (Blueprint $table) {
            $table->uuid('user_id')->nullable();
            $table->foreign('user_id')->references('uuid')->on('users');
            $table->boolean('confirmed')->default(false);
            $table->dropColumn('last_modified_by');
        });
        Schema::table('demande_p007_s', function (Blueprint $table) {
            $table->uuid('user_id')->nullable();
            $table->foreign('user_id')->references('uuid')->on('users');
            $table->boolean('confirmed')->default(false);
            $table->dropColumn('last_modified_by');
        });
        Schema::table('demande_p008_s', function (Blueprint $table) {
            $table->uuid('user_id')->nullable();
            $table->foreign('user_id')->references('uuid')->on('users');
            $table->boolean('confirmed')->default(false);
            $table->dropColumn('last_modified_by');
        });
        Schema::table('demande_p009_s', function (Blueprint $table) {
            $table->uuid('user_id')->nullable();
            $table->foreign('user_id')->references('uuid')->on('users');
            $table->boolean('confirmed')->default(false);
            $table->dropColumn('last_modified_by');
        });
        Schema::table('demande_p0010_s', function (Blueprint $table) {
            $table->uuid('user_id')->nullable();
            $table->foreign('user_id')->references('uuid')->on('users');
            $table->boolean('confirmed')->default(false);
            $table->dropColumn('last_modified_by');
        });
        Schema::table('demande_p0011_s', function (Blueprint $table) {
            $table->uuid('user_id')->nullable();
            $table->foreign('user_id')->references('uuid')->on('users');
            $table->boolean('confirmed')->default(false);
            $table->dropColumn('last_modified_by');
        });
    }
};
