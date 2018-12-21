<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValorNutricionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valor_nutricionals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantidade');
                $table->unsignedInteger('idIngredientes');
                $table->unsignedInteger('idNutrientes');
            $table->foreign('idIngredientes')->references('id')->on('ingredientes');
            $table->foreign('idNutrientes')->references('id')->on('nutrientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('valor_nutricionals');
    }
}
