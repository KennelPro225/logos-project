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
        Schema::create('versets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('livre_id')->nullable()->constrained("books", "id");
            $table->integer('chapitre')->nullable();
            $table->integer('debut_verset')->nullable();
            $table->integer('fin_verset')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('versets');
    }
};
