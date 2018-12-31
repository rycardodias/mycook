<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredientes', function (Blueprint $table) {
           $table->increments('id');
            $table->string('nome');
            $table->string('descricao');
                $table->unsignedInteger('idUtilizador');
                $table->unsignedInteger('idOrigem');
            $table->foreign('idUtilizador')->references('id')->on('users');
            $table->foreign('idOrigem')->references('id')->on('origem_alimentos');
            $table->timestamps();
        });

        DB::table('ingredientes')->insert(array(
            array(
                'nome' => 'Batata',
                'descricao' => 'Batata nova ou velha',
                'idUtilizador' => '1',
                'idOrigem' => '3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Bife de vaca',
                'descricao' => 'Bife de vaca',
                'idUtilizador' => '1',
                'idOrigem' => '2',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
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
        Schema::dropIfExists('ingredientes');
    }
}
