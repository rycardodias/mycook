<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNutrientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutrientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nutriente');
                $table->unsignedInteger('idDetalheNutriente');
            $table->foreign('idDetalheNutriente')->references('id')->on('detalhe_nutrientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nutrientes');
    }
}
