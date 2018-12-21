<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrigemAlimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('origem_alimentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('origemAlimento');
        });
        
        DB::table('origem_alimentos')->insert(array(
            array(
            'id' => '1',
            'origemAlimento' => 'Animal'
            ),
            array(
            'id' => '2',
            'origemAlimento' => 'Vegetal'
            ),
            array(
            'id' => '3',
            'origemAlimento' => 'Derivados animal'
            ),
            array(
            'id' => '4',
            'origemAlimento' => 'Derivados vegetal'
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
        Schema::dropIfExists('origem_alimentos');
    }
}
