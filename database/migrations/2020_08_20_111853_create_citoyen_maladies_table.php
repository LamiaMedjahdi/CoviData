<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitoyenMaladiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citoyen_maladies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mal_id');
            $table->foreign('mal_id')->references('id')->on('maladies')->onDelete('cascade');
            $table->unsignedInteger('cit_id');
            $table->foreign('cit_id')->references('id')->on('citoyens')->onDelete('cascade');
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
        Schema::dropIfExists('citoyen_maladies');
    }
}
