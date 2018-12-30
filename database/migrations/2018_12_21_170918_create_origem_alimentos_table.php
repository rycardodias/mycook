<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrigemAlimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('origem_alimentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('origemAlimento');
        });
        
        DB::table('origem_alimentos')->insert(array(
            array(
            'id' => '1',
            'origemAlimento' => 'Sem Restrições'
            ),
            array(
            'id' => '2',
            'origemAlimento' => 'Animal'
            ),
            array(
            'id' => '3',
            'origemAlimento' => 'Vegetal'
            ),
            array(
            'id' => '4',
            'origemAlimento' => 'Derivados animal'
            ),
            array(
            'id' => '5',
            'origemAlimento' => 'Derivados vegetal'
            ),
            array(
            'id' => '6',
            'origemAlimento' => 'Bebida'
            ),
            array(
            'id' => '7',
            'origemAlimento' => 'Bebida Alcoolica'
            ),
            array(
            'id' => '8',
            'origemAlimento' => 'Bebida Lactia'
            ),
            array(
            'id' => '9',
            'origemAlimento' => 'Quantidade açucar elevado'
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
        Schema::dropIfExists('origem_alimentos');
    }
}
