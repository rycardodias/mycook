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
            array(
                'nome' => 'Bacalhau',
                'descricao' => 'Bacalhau demolhado',
                'idUtilizador' => '1',
                'idOrigem' => '2',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Leite',
                'descricao' => 'Leite meio gordo',
                'idUtilizador' => '1',
                'idOrigem' => '8',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Cebola',
                'descricao' => 'Cebola galega',
                'idUtilizador' => '1',
                'idOrigem' => '3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Farinha',
                'descricao' => 'Farinha branca de neve',
                'idUtilizador' => '1',
                'idOrigem' => '3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Natas',
                'descricao' => 'Natas de culinária',
                'idUtilizador' => '1',
                'idOrigem' => '8',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Queijo',
                'descricao' => 'Queijo de vaca',
                'idUtilizador' => '1',
                'idOrigem' => '4',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Sal',
                'descricao' => 'Sal grosso',
                'idUtilizador' => '1',
                'idOrigem' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Azeite',
                'descricao' => 'Azeite de oliva',
                'idUtilizador' => '1',
                'idOrigem' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            // aqui
            array(
                'nome' => 'Açucar',
                'descricao' => 'Açucar em pó',
                'idUtilizador' => '1',
                'idOrigem' => '3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Ovos',
                'descricao' => 'Ovos caseiros',
                'idUtilizador' => '1',
                'idOrigem' => '4',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Óleo',
                'descricao' => 'Óleo vegetal',
                'idUtilizador' => '1',
                'idOrigem' => '5',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Baunilha',
                'descricao' => 'Extrato de Baunilha',
                'idUtilizador' => '1',
                'idOrigem' => '3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Cacau',
                'descricao' => 'Cacau em pó',
                'idUtilizador' => '1',
                'idOrigem' => '3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Chispe',
                'descricao' => 'Chispe de Porco',
                'idUtilizador' => '1',
                'idOrigem' => '2',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Orelha',
                'descricao' => 'Orelha de porco',
                'idUtilizador' => '1',
                'idOrigem' => '2',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Feijão',
                'descricao' => 'Feijão Branco',
                'idUtilizador' => '1',
                'idOrigem' => '3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Cenoura',
                'descricao' => 'Cenoura nova',
                'idUtilizador' => '1',
                'idOrigem' => '3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Alho',
                'descricao' => 'Dente de alho',
                'idUtilizador' => '1',
                'idOrigem' => '3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Chouriço',
                'descricao' => 'Chouriço de sangue',
                'idUtilizador' => '1',
                'idOrigem' => '2',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Couve',
                'descricao' => 'Couve Portuguesa',
                'idUtilizador' => '1',
                'idOrigem' => '3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Pimento',
                'descricao' => 'Pimento Vermelho',
                'idUtilizador' => '1',
                'idOrigem' => '3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Salsa',
                'descricao' => 'Salsa picada',
                'idUtilizador' => '1',
                'idOrigem' => '3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Louro',
                'descricao' => 'Folha de louro',
                'idUtilizador' => '1',
                'idOrigem' => '3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Vinho Branco',
                'descricao' => 'Vinho verde branco',
                'idUtilizador' => '1',
                'idOrigem' => '7',
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
