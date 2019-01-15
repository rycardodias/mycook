<link rel="stylesheet" href="../css/menu.css">


<div class="nav">
    @include('includes.navbar')
</div>

<div class="widget">
    <div class="widget-heading">
        <h4>Filtros Ingredientes</h4>
    </div>
    <div class="widget-body">
        <ul class="categories">
@foreach($listaorigem as $lista)
    <li>
        <h3><a href="/origem/{{$lista->id}}">{{$lista->origemAlimento}}</a></h3>
    </li>
@endforeach
</ul>
    </div>
    </div>

<section class="corpo" id="receitasShow">
    @if(!empty($origem))
    @foreach ($origem as $origem)

        <h5> Filtro {{$origem->origemAlimento}}</h5>
            <h3><a href="/ingredientes/{{$origem->id}}">{{$origem->nome}}</a></h3>
        <p>{{$origem->created_at}}
    @endforeach

        @else
            <p>Sem receitas encontradas</p>
        @endif

        <a href="/receitas/create">Criar Receita</a>

</section>
<footer id="rodape">
    @include('includes.footer')
</footer>