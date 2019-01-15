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
            $table->string('nome', 500);
                $table->string('resumo', 500);
            $table->string('detalhes', 500);
            $table->string('nPassos', 500);
            $table->integer('nPessoas');
            $table->unsignedInteger('idUtilizador');
            $table->foreign('idUtilizador')->references('id')->on('users');
            $table->timestamps();

        });


        DB::table('receitas')->insert(array(
            array(
                'nome' => 'Bacalhau com Natas',
                'resumo' => 'Um dos pratos mais conhecidos de bacalhau é sem dúvida o Bacalhau com Natas. O PetitChef decidiu fazer esta delícia da culinária Portuguesa, não deixe de fazer, é bem simples assim.',
                'nPassos' => 'Levar o leite a ferver. Quando ferver, juntar as postas de bacalhau já demolhadas. Refogar as cebolas em azeite quente. Lavar, descascar e cortar as batatas em cubos. Fritar em azeite quente.',
                'detalhes' => 'O Bacalhau com Natas é uma receita bla bla bla bla bla pardais ao ninh.',
                'nPessoas' => '2',
                'idUtilizador' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Crepe mármore',
                'resumo' => 'Crepe mármore é o crepe com dois sabores, chocolate e baunilha. É a mesma receita do crepe clássico. Só precisamos misturar com um pouco de chocolate e soltar a imaginação para fazer crepes lindos, desenhados como fazem os artistas.',
                'nPassos' => '1. Numa tigela, misture toda farinha e o sal . Faça um buraco no meio e coloque os ovos. 2. Misture e junte o extrato de baunilha e o óleo. 3. Aqueça a frigideira e unte de óleo com um papel de cozinha.',
                'detalhes' => 'Nesta receita colocamos o cacau em pó que é mais amargo. Ele pode ser substituído pelo achocolatado, caso goste de um crepe mais doce.',
                'nPessoas' => '2',
                'idUtilizador' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Feijoada à portuguesa',
                'resumo' => 'A feijoada à transmontana é um prato da gastronomia portuguesa que tem origem na região de Candedo.',
                'nPassos' => 'Na véspera, salgue o chispe, a orelha o pernil e o entrecosto, tudo cortado em pedaços, demolhe o feijão. 2. No próprio dia, coza o feijão em água com uma cebola descascada e os cravinhos espetados nela. 3.Descasque a cebola restante e os dentes de alho e pique ambos. Descasque a cenoura e corte-a em rodelas. 4. Corte o chouriço de carne de igual forma e coza o chouriço de sangue em água. Quando estiver frio, corte-o em pedaços.',
                'detalhes' => 'Prato que servia como um aproveitamento de todos as carnes do porco, juntamente com o feijão. Surge da necessidade e das dificuldades do povo em se alimentar, pois era de fácil confeção e aproveitava-se toda carne do porco criado em casa.',
                'nPessoas' => '4',
                'idUtilizador' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'nome' => 'Coxinhas de frango econômica',
                'resumo' => 'É maravilhosa, de comer ajoelhado. Massa super leve e fácil de fazer.',
                'nPassos' => '1. Ferver a agua. Depois de fervida, jogar a farinha de uma só vez e mexer até soltar do fundo da panela. 2.Depois da massa fria, pegar pedaços da massa, abrir na mão, colocar o recheio e fechar como um saquinho, enrolar e fazer o formato da coxinha. 3.Para empanar, colocar em uma bacia 750 ml de água para 3 colheres de sopa bem cheias de farinha de trigo e dissolver. Em outra bacia colocar a farinha de rosca.',
                'detalhes' => 'Lorem ipsum sem pulvinar luctus aptent praesent ac tortor quam justo vivamus potenti, enim aliquam cubilia vivamus ut suscipit convallis leo suspendisse consectetur eget. sociosqu blandit quisque varius sed est gravida nec auctor vulputate phasellus, eleifend odio tellus nunc interdum suscipit quam et euismod ultricies quisque, nisi tincidunt mi ullamcorper cursus rutrum justo est.',
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
