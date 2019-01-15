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
                $table->unsignedInteger('idUnidadeMedida');
            $table->foreign('idReceita')->references('id')->on('receitas');
            $table->foreign('idIngrediente')->references('id')->on('ingredientes');
            $table->foreign('idUnidadeMedida')->references('id')->on('unidade_medidas');
            $table->integer('quantidade');
        });

        DB::table('ingrediente_receitas')->insert(array(
            array(
            'idReceita' => '1',
            'idIngrediente' => '3',
            'idUnidadeMedida' => '13',
            'quantidade' => '700',
            ),
            array(
            'idReceita' => '1',
            'idIngrediente' => '4',
            'idUnidadeMedida' => '8',
            'quantidade' => '600',
            ),
            array(
            'idReceita' => '1',
            'idIngrediente' => '5',
            'idUnidadeMedida' => '3',
            'quantidade' => '2',
            ),
            array(
            'idReceita' => '1',
            'idIngrediente' => '7',
            'idUnidadeMedida' => '8',
            'quantidade' => '200',
            ),
            // CREPE MARMORE

            array(
            'idReceita' => '2',
            'idIngrediente' => '6',
            'idUnidadeMedida' => '13',
            'quantidade' => '250',
            ),
            array(
            'idReceita' => '2',
            'idIngrediente' => '9',
            'idUnidadeMedida' => '6',
            'quantidade' => '1',
            ),
            array(
            'idReceita' => '2',
            'idIngrediente' => '11',
            'idUnidadeMedida' => '13',
            'quantidade' => '80',
            ),
            array(
            'idReceita' => '2',
            'idIngrediente' => '12',
            'idUnidadeMedida' => '7',
            'quantidade' => '4',
            ),

            array(
                'idReceita' => '3',
                'idIngrediente' => '3',
                'idUnidadeMedida' => '13',
                'quantidade' => '700',
                ),
                array(
                'idReceita' => '3',
                'idIngrediente' => '4',
                'idUnidadeMedida' => '8',
                'quantidade' => '600',
                ),
                array(
                'idReceita' => '3',
                'idIngrediente' => '5',
                'idUnidadeMedida' => '3',
                'quantidade' => '2',
                ),
                array(
                'idReceita' => '3',
                'idIngrediente' => '7',
                'idUnidadeMedida' => '8',
                'quantidade' => '200',
                ),
                // CREPE MARMORE
    
                array(
                'idReceita' => '4',
                'idIngrediente' => '6',
                'idUnidadeMedida' => '13',
                'quantidade' => '250',
                ),
                array(
                'idReceita' => '4',
                'idIngrediente' => '9',
                'idUnidadeMedida' => '6',
                'quantidade' => '1',
                ),
                array(
                'idReceita' => '4',
                'idIngrediente' => '11',
                'idUnidadeMedida' => '13',
                'quantidade' => '80',
                ),
                array(
                'idReceita' => '4',
                'idIngrediente' => '12',
                'idUnidadeMedida' => '7',
                'quantidade' => '4',
                ),
        ));
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
