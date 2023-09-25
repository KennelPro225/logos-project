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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenoms');
            $table->string('email')->unique();
            $table->timestamp('annee_naissance');
            $table->string('photo')->nullable();
            $table->foreignId('eglise_id')->constrained("eglises","id");
            $table->timestamp("annee_bapteme")->nullable();
            $table->timestamp("annee_conversion")->nullable();
            $table->boolean("baptise_saint_esprit");
            $table->boolean("service");
            $table->foreignId("departement_id")->constrained("departements","id");
            $table->foreignId("fonction_id")->constrained("fonctions","id");
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
