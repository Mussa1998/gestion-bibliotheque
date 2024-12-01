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
        Schema::create('emprunteur_livre', function (Blueprint $table) {
            $table->id();
            $table->foreignId('emprunteur_id')->constrained()->onDelete('cascade');
            $table->foreignId('livre_id')->constrained()->onDelete('cascade');
            $table->date('date_emprunt');
            $table->date('date_retour')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emprunteur_livre');
    }
};