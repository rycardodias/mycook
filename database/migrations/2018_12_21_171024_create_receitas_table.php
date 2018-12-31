<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receitas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('resumo');
            $table->string('nPassos');
            $table->integer('nPessoas');
                $table->unsignedInteger('idUtilizador');
            $table->foreign('idUtilizador')->references('id')->on('users');
            $table->timestamps();
        });
        DB::table('receitas')->insert(array(
            array(
                'nome' => 'Bife grelhado com batatas fritas',
                'resumo' => 'Bife grelhado com batatas fritas',
                'nPassos' => '1ºFritar os bifes 2º Fritar as batatas',
                'nPessoas' => '2',
                'idUtilizador' => '1',
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
        Schema::dropIfExists('receitas');
    }
}
