<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAjoutproduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ajoutproducts', function (Blueprint $table) {
            $table->increments('id');
            
            
            $table->string('lieu');
            $table->integer('quantité');
            $table->integer('user_id');
            $table->integer('produit_id');
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
        Schema::dropIfExists('ajoutproduits');
    }
}
