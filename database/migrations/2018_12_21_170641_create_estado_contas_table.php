<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadoContasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_contas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estadoConta');
        });
        
        DB::table('estado_contas')->insert(array(
            array(
            'id' => '1',
            'estadoConta' => 'Sem-Ativação'
            ),
            array(
            'id' => '2',
            'estadoConta' => 'Ativa'
            ),
            array(
            'id' => '3',
            'estadoConta' => 'Inativa'
            ),
            array(
            'id' => '4',
            'estadoConta' => 'Bloqueada'
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
        Schema::dropIfExists('estado_contas');
    }
}
