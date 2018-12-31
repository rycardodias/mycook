<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            
            $table->unsignedInteger('tipoUtilizador')->default(1);
            $table->unsignedInteger('estadoConta')->default(1);
            $table->unsignedInteger('sexo')->default(1);
            $table->unsignedInteger('faixaEtaria')->default(1);
            $table->unsignedInteger('atividadeFisica')->default(1);
            
            $table->foreign('tipoUtilizador')->references('id')->on('tipo_utilizadors');
            $table->foreign('estadoConta')->references('id')->on('estado_contas');
            $table->foreign('sexo')->references('id')->on('sexos');
            $table->foreign('faixaEtaria')->references('id')->on('faixa_etarias');
            $table->foreign('atividadeFisica')->references('id')->on('atividade_fisicas');

        });

        DB::table('users')->insert(array(
            array(
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$VjENQyiI0iVDFFpokJNyM.EDKJ5gQ5Md4uClFTVYa7CnkV8kt7Egu',
            'tipoUtilizador' => '3',
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
        Schema::dropIfExists('users');
    }
}
