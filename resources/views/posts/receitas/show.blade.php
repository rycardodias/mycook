<link rel="stylesheet" href="../css/menu.css">


<div class="nav">
    @include('includes.navbar')
</div>
<section class="corpo" id="receitasShow">
    <div class=esquerda>
        <img src="{{ asset($receita->imagem) }}"/>
        <h1>{{$receita->nome}}</h1>
        <p>{{$receita->resumo}}

            @if (Auth::user()->tipoUtilizador=='3' OR Auth::user()->id == $receita->idUtilizador )
                <a href="/receitas/{{$receita->id}}/edit" class="btn btn-default">Editar</a>

        @endif
    </div>

    <div class=direita>
        @if (Auth::user()->tipoUtilizador=='3' OR Auth::user()->id == $receita->idUtilizador )
            <a href="/ir/create">Adicionar ingrediente</a>
        @endif
        <div class="Ingredientes">
            <h2> Ingredientes da Receita </h2>
            @foreach($ingrediente_receitas as $ingredientesr)

                <p><a>{{$ingredientesr->nome}}&nbsp;&nbsp;&nbsp;Quantidade: {{$ingredientesr->quantidade}}
                     {{$ingredientesr->unidadeMedida}}</a>
                <br>
            @endforeach
        </div>
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
