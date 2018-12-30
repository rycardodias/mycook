<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensagens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('email');
            $table->string('assunto');
            $table->string('mensagem');
            $table->timestamps();
        });

        DB::table('mensagens')->insert(array(
            array(
            'id' => '1',
            'nome' => 'MensagemTeste1',
            'email' => 'MensagemTeste1@gmail.com',
            'assunto' => 'TesteN1',
            'mensagem' => 'Mensagem de Teste 1'
            ),
            array(
            'id' => '2',
            'nome' => 'MensagemTeste2',
            'email' => 'MensagemTeste2@gmail.com',
            'assunto' => 'TesteN2',
            'mensagem' => 'Mensagem de Teste 2'
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
        Schema::dropIfExists('mensagens');
    }
}
