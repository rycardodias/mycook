<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredienteReceitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingrediente_receitas', function (Blueprint $table) {
                $table->unsignedInteger('idReceita');
                $table->unsignedInteger('idIngrediente');
            $table->foreign('idReceita')->references('id')->on('receitas');
            $table->foreign('idIngrediente')->references('id')->on('ingredientes');
            $table->integer('quantidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingrediente_receitas');
    }
}
