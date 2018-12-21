<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaixaEtariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faixa_etarias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('faixaEtaria');
        });
        
         DB::table('faixa_etarias')->insert(array(
            array(
            'id' => '1',
            'faixaEtaria' => 'Indefinido'
            ),
            array(
            'id' => '2',
            'faixaEtaria' => '16-24'
            ),
            array(
            'id' => '3',
            'faixaEtaria' => '25-39'
            ),
            array(
            'id' => '4',
            'faixaEtaria' => '40-54'
            ),
             array(
            'id' => '5',
            'faixaEtaria' => '55+'
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
        Schema::dropIfExists('faixa_etarias');
    }
}
