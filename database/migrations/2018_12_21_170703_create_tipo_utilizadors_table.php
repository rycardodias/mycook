<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoUtilizadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_utilizadors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipoUtilizador');
        });
        
        DB::table('tipo_utilizadors')->insert(array(
            array(
            'id' => '1',
            'tipoUtilizador' => 'Utilizador'
            ),
            array(
            'id' => '2',
            'tipoUtilizador' => 'Moderador'
            ),
            array(
            'id' => '3',
            'tipoUtilizador' => 'Administrador'
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
        Schema::dropIfExists('tipo_utilizadors');
    }
}
