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
