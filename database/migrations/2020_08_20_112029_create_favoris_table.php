<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favoris', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date');
            $table->unsignedInteger('info_id');
            $table->foreign('info_id')->references('id')->on('informations')->onDelete('cascade');
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
        Schema::dropIfExists('favoris');
    }
}
