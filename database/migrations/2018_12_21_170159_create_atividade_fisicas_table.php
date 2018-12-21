<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtividadeFisicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atividade_fisicas', function (Blueprint $table) {
          $table->increments('id');
            $table->string('nivelAtividade');
        });
        
        DB::table('atividade_fisicas')->insert(array(
            array(
            'id' => '1',
            'nivelAtividade' => 'Indefinido'
            ),
            array(
            'id' => '2',
            'nivelAtividade' => 'Pouco Ativo'
            ),
            array(
            'id' => '3',
            'nivelAtividade' => 'Levemente Ativo'
            ),
            array(
            'id' => '4',
            'nivelAtividade' => 'Ativo'
            ),
            array(
            'id' => '5',
            'nivelAtividade' => 'Muito Ativo'
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
        Schema::dropIfExists('atividade_fisicas');
    }
}
