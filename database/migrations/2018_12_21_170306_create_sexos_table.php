<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSexosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sexos', function (Blueprint $table) {
        $table->increments('id');
            $table->string('sexo');
        });
        
        DB::table('sexos')->insert(array(
            array(
            'id' => '1',
            'sexo' => 'Indefinido'
            ),
            array(
            'id' => '2',
            'sexo' => 'Masculino'
            ),
            array(
            'id' => '3',
            'sexo' => 'Feminino'
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
        Schema::dropIfExists('sexos');
    }
}
