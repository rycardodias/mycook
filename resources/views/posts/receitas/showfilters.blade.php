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
                    <h3><a href="/tipo/{{$lista->id}}">{{$lista->tipoConsumidor}}</a></h3>  
                @endforeach
            </div>
        </div>
    </div>
    <div class="direita">
        @if(!empty($tipo))
        @foreach ($tipo as $tipo)
            <h5> Filtro {{$tipo->tipoConsumidor}}</h5>
                <h3><a href="/receitas/{{$tipo->id}}">{{$tipo->nome}}</a></h3>
            <p>{{$tipo->created_at}}
        @endforeach
        @else
            <p>Sem receitas encontradas</p>
        @endif
            <a href="/receitas/create">Criar Receita</a>
    </div>
</section>
<footer id="rodape">
    @include('includes.footer')
</footer>