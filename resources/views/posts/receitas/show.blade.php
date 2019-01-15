<link rel="stylesheet" href="../css/menu.css">


<div class="nav">
        @include('includes.navbar')
</div>
<section class="corpo" id="receitasShow">
<div class=esquerda>
    <img src="{{ asset($receita->imagem) }}" />
    <h1>{{$receita->nome}}</h1>
    <p>{{$receita->resumo}}

        <a href="/receitas/{{$receita->id}}/edit" class="btn btn-default">Editar</a>
        {!!Form::open(['action' => ['ReceitasController@destroy', $receita->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Eliminar', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    
</div>

<div class=direita>
    <div class="detalhes">
        <h2> Detalhes da Receita </h2>
        <p>{{$receita->detalhes}}
    </div>
    <div class="passos">
        <h2> Passo a Passo </h2>
        <p>{{$receita->nPassos}}
    </div>
    <div class="nPessoas">
        <h2> Numero de Pessoas </h2>
        <p>{{$receita->nPessoas}} pessoas
    </div>
    <div class="edit">
        <p>{{$receita->updated_at}}
    </div>
</div>

</section>
<footer id="rodape">
    @include('includes.footer')
</footer>
