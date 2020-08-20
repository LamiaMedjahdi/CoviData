<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitoyensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citoyens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('image')->nullable();
            $table->unsignedInteger('com_id');
            $table->foreign('com_id')->references('id')->on('communes')->onDelete('cascade')->onDelete('cascade');
            $table->unsignedInteger('pro_id');
            $table->foreign('pro_id')->references('id')->on('professions')->onDelete('cascade')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('citoyens');
    }
}
