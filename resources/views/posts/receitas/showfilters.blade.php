<link rel="stylesheet" href="../css/menu.css">


<div class="nav">
    @include('includes.navbar')
</div>

<section class="corpo" id="showfilter">
    <div class="esquerda">
        <div class="filtroTipoConsumidor">
            <h3>Tipo Consumidor</h3>
            <div class="opcao">
                @foreach($listatipos as $lista)
                    <p><a href="/tipo/{{$lista->id}}">{{$lista->tipoConsumidor}}</a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="direita">
    <div class="topoReceitas">
            <h1>Lista de Receitas</h1>
            <a href="/receitas/create">Criar Receita</a>
        </div>
        @if(!empty($tipo))
        
        @foreach ($tipo as $tipo)
                <h3><a href="/receitas/{{$tipo->id}}">{{$tipo->nome}}</a></h3>
        @endforeach
        @else
            <p>Sem receitas encontradas</p>
        @endif
    </div>
</section>
<footer id="rodape">
    @include('includes.footer')
</footer>