<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encadreurstagiaires', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('encadreur_id');
            $table->unsignedBigInteger('stagiaire_id');
            $table->timestamps();
            $table->foreign('encadreur_id')->references('id')->on('encadreurs')->onDelete('cascade');
            $table->foreign('stagiaire_id')->references('id')->on('stagiaires')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encadreurstagiaires');
    }
};
