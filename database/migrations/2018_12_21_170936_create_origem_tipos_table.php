<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrigemTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('origem_tipos', function (Blueprint $table) {
                $table->unsignedInteger('idTipoConsumidor');
                $table->unsignedInteger('idOrigemAlimento');

            $table->foreign('idTipoConsumidor')->references('id')->on('tipo_consumidors');
            $table->foreign('idOrigemAlimento')->references('id')->on('origem_alimentos');   
        });

        DB::table('origem_tipos')->insert(array(
            array(
            'idTipoConsumidor' => '1',
            'idOrigemAlimento' => '1'
            ),
            //Vegetariano
            array(
            'idTipoConsumidor' => '2',
            'idOrigemAlimento' => '3'
            ),
            array(
            'idTipoConsumidor' => '2',
            'idOrigemAlimento' => '6'
            ),
            array(
            'idTipoConsumidor' => '2',
            'idOrigemAlimento' => '7'
            ),
            array(
            'idTipoConsumidor' => '2',
            'idOrigemAlimento' => '9'
            ),
            //Vegetariano c/derivados
            array(
            'idTipoConsumidor' => '3',
            'idOrigemAlimento' => '3'
            ),
            array(
            'idTipoConsumidor' => '3',
            'idOrigemAlimento' => '4'
            ),
            array(
            'idTipoConsumidor' => '3',
            'idOrigemAlimento' => '5'
            ),
            array(
            'idTipoConsumidor' => '3',
            'idOrigemAlimento' => '6'
            ),
            array(
            'idTipoConsumidor' => '3',
            'idOrigemAlimento' => '7'
            ),
            array(
            'idTipoConsumidor' => '3',
            'idOrigemAlimento' => '8'
            ),
            array(
            'idTipoConsumidor' => '3',
            'idOrigemAlimento' => '9'
            ),
            //Intolerante Lactose
            array(
            'idTipoConsumidor' => '4',
            'idOrigemAlimento' => '2'
            ), 
            array(
            'idTipoConsumidor' => '4',
            'idOrigemAlimento' => '3'
            ), 
            array(
            'idTipoConsumidor' => '4',
            'idOrigemAlimento' => '4'
            ), 
            array(
            'idTipoConsumidor' => '4',
            'idOrigemAlimento' => '5'
            ), 
            array(
            'idTipoConsumidor' => '4',
            'idOrigemAlimento' => '6'
            ), 
            array(
            'idTipoConsumidor' => '4',
            'idOrigemAlimento' => '7'
            ), 
            array(
            'idTipoConsumidor' => '4',
            'idOrigemAlimento' => '9'
            ), 
            //Intolerante ao alcool
            array(
            'idTipoConsumidor' => '5',
            'idOrigemAlimento' => '2'
            ), 
            array(
            'idTipoConsumidor' => '5',
            'idOrigemAlimento' => '3'
            ), 
            array(
            'idTipoConsumidor' => '5',
            'idOrigemAlimento' => '4'
            ), 
            array(
            'idTipoConsumidor' => '5',
            'idOrigemAlimento' => '5'
            ), 
            array(
            'idTipoConsumidor' => '5',
            'idOrigemAlimento' => '6'
            ), 
            array(
            'idTipoConsumidor' => '5',
            'idOrigemAlimento' => '8'
            ), 
            array(
            'idTipoConsumidor' => '5',
            'idOrigemAlimento' => '9'
            ), 
            //Diabético
            array(
            'idTipoConsumidor' => '6',
            'idOrigemAlimento' => '2'
            ), 
            array(
            'idTipoConsumidor' => '6',
            'idOrigemAlimento' => '3'
            ), 
            array(
            'idTipoConsumidor' => '6',
            'idOrigemAlimento' => '4'
            ), 
            array(
            'idTipoConsumidor' => '6',
            'idOrigemAlimento' => '5'
            ), 
            array(
            'idTipoConsumidor' => '6',
            'idOrigemAlimento' => '6'
            ), 
            array(
            'idTipoConsumidor' => '6',
            'idOrigemAlimento' => '7'
            ), 
            array(
            'idTipoConsumidor' => '6',
            'idOrigemAlimento' => '8'
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
        Schema::dropIfExists('origem_tipos');
    }
}
