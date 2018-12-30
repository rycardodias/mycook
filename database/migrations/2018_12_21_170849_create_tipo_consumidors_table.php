<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoConsumidorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_consumidors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipoConsumidor');
        });
        
         DB::table('tipo_consumidors')->insert(array(
            array(
            'id' => '1',
            'tipoConsumidor' => 'Normal'
            ),
            array(
            'id' => '2',
            'tipoConsumidor' => 'Vegetariano'
            ),
            array(
            'id' => '3',
            'tipoConsumidor' => 'Vegetariano c/derivados'
            ),
            array(
            'id' => '4',
            'tipoConsumidor' => 'Intolerante a lactose'
            ),
            array(
            'id' => '5',
            'tipoConsumidor' => 'Intolerante ao alcool'
            ),
            array(
            'id' => '6',
            'tipoConsumidor' => 'Diabético'
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
        Schema::dropIfExists('tipo_consumidors');
    }
}
