<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre');
            $table->string('contenu', 500);
            $table->string('lien')->nullable();
            $table->string('image')->nullable();
            $table->date('date');
            $table->unsignedInteger('mal_id')->nullable();
            $table->foreign('mal_id')->references('id')->on('maladies')->onDelete('cascade');
            $table->unsignedInteger('pro_id')->nullable();
            $table->foreign('pro_id')->references('id')->on('professions')->onDelete('cascade');
            $table->unsignedInteger('sou_id')->nullable();
            $table->foreign('sou_id')->references('id')->on('sources')->onDelete('cascade');
            $table->unsignedInteger('wilaya_id')->nullable();
            $table->foreign('wilaya_id')->references('id')->on('wilayas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informations');
    }
}
