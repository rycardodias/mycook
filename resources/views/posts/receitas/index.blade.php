<link rel="stylesheet" href="../css/menu.css">

<div class="nav">
        @include('includes.navbar')
</div>



<section class="corpo" id="receitasIndex">
    <div class="direita">
        <div class="topoReceitas">
            <h1>Lista de Receitas</h1>
            <a href="/receitas/create">Criar Receita</a>
        </div>
        @if(count($receita)>0)
            @foreach($receita as $receita)
                <div class="well">
                    <h3><a href="/receitas/{{$receita->id}}">{{$receita->nome}}</a></h3>
                    <small>{{$receita->resumo}}</small>
                </div>
            @endforeach
        @else
            <p>Sem receitas encontradas</p>
        @endif
    </div>
    <div class="esquerda">
        <div class="filtroTipoConsumidor">
            <h3>Tipo Consumidor</h3>
            <div class="opcao">
                @foreach($tipos as $tipo)
                    <p><a href="/tipo/{{$tipo->id}}">{{$tipo->tipoConsumidor}}</a>
                @endforeach
            </div>
        </div>
    </div>
</section>

<footer id="rodape">
    @include('includes.footer')
</footer>

