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
        Schema::create('chauffeurs', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("prenom");
            $table->integer("age");
            $table->string("tel");
            $table->string("CNI");
            $table->string("numPermis");
            $table->string("marqueVoiture");
            $table->string("matriculeVoiture");
            $table->tinyInteger("status")->default('0')->comment('0=Non Confirme ,1=confirme');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chauffeurs');
    }
};
