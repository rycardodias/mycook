<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadeMedidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidade_medidas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unidadeMedida');
        });
        DB::table('unidade_medidas')->insert(array(
            array(
            'id' => '1',
            'unidadeMedida' => 'copo'
            ),
            array(
            'id' => '2',
            'unidadeMedida' => 'xícara'
            ),
            array(
            'id' => '3',
            'unidadeMedida' => 'colher de sopa'
            ),
             array(
            'id' => '4',
            'unidadeMedida' => 'colher de sobremesa'
            ),
            array(
            'id' => '5',
            'unidadeMedida' => 'colher de chá'
            ),
            array(
            'id' => '6',
            'unidadeMedida' => 'colher de café'
            ),
            array(
            'id' => '7',
            'unidadeMedida' => 'cálice'
            ),
            array(
            'id' => '8',
            'unidadeMedida' => 'ml'
            ),
            array(
            'id' => '9',
            'unidadeMedida' => 'dl'
            ),
            array(
            'id' => '10',
            'unidadeMedida' => 'cl'
            ),
            array(
            'id' => '11',
            'unidadeMedida' => 'l'
            ),
            array(
            'id' => '12',
            'unidadeMedida' => 'mg'
            ),
            array(
            'id' => '13',
            'unidadeMedida' => 'g'
            ),
            array(
            'id' => '14',
            'unidadeMedida' => 'kg'
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
        Schema::dropIfExists('unidade_medidas');
    }
}
