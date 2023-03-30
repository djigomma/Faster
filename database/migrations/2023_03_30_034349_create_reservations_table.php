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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('chauffeur_id');
            $table->unsignedBigInteger('lieu_depart_id');
            $table->unsignedBigInteger('lieu_arrivee_id');
            $table->dateTime('date_reservation');
            $table->timestamps();
            
            $table->foreign('client_id')->references('id')->on('users');
            $table->foreign('chauffeur_id')->references('id')->on('chauffeurs');
            $table->foreign('lieu_id')->references('id')->on('lieux');
            $table->foreign('lieu_depart_id')->references('id')->on('lieus');
            $table->foreign('lieu_arrivee_id')->references('id')->on('lieus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
