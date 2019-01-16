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
            $table->timestamps();

            $table->foreign('idReceita')->references('id')->on('receitas');
            $table->foreign('idIngrediente')->references('id')->on('ingredientes');
            $table->foreign('idUnidadeMedida')->references('id')->on('unidade_medidas');
            $table->integer('quantidade');
        });

        DB::table('ingrediente_receitas')->insert(array(
            array(
            'idReceita' => '1',
            'idIngrediente' => '1',
            'idUnidadeMedida' => '13',
            'quantidade' => '700',
            ),
            array(
            'idReceita' => '1',
            'idIngrediente' => '5',
            'idUnidadeMedida' => '8',
            'quantidade' => '600',
            ),

            // CREPE MARMORE

            array(
            'idReceita' => '2',
            'idIngrediente' => '10',
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
                'idReceita' => '3',
                'idIngrediente' => '12',
                'idUnidadeMedida' => '13',
                'quantidade' => '700',
                ),
                array(
                'idReceita' => '3',
                'idIngrediente' => '8',
                'idUnidadeMedida' => '8',
                'quantidade' => '600',
                ),

                // CREPE MARMORE
    
                array(
                'idReceita' => '4',
                'idIngrediente' => '4',
                'idUnidadeMedida' => '13',
                'quantidade' => '250',
                ),
                array(
                'idReceita' => '4',
                'idIngrediente' => '7',
                'idUnidadeMedida' => '6',
                'quantidade' => '1',
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
