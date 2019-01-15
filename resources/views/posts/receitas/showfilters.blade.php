<link rel="stylesheet" href="../css/menu.css">


<div class="nav">
    @include('includes.navbar')
</div>

<div class="widget">
    <div class="widget-heading">
        <h4>Tipo Consumidor</h4>
    </div>
    <div class="widget-body">
        <ul class="categories">
@foreach($listatipos as $lista)
    <li>
        <h3><a href="/tipo/{{$lista->id}}">{{$lista->tipoConsumidor}}</a></h3>
    </li>
@endforeach
</ul>
    </div>
    </div>

<section class="corpo" id="receitasShow">
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

</section>
<footer id="rodape">
    @include('includes.footer')
</footer>