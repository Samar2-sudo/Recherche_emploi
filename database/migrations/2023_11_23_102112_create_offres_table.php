<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresTable extends Migration
{
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->string('poste');
            $table->text('description');
            $table->unsignedBigInteger('entreprise_associee');
            $table->foreign('entreprise_associee')->references('id')->on('entreprises')->onDelete('cascade');
            $table->unsignedBigInteger('categorie_id')->nullable();
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('competences');
            $table->string('emplacement');
            $table->date('date_de_publication');
            $table->date('date_de_cloture');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('offres');
    }
}
