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

    @foreach($tipos as $tipo)
        <li>
            <h3><a href="/tipo/{{$tipo->id}}">{{$tipo->tipoConsumidor}}</a></h3>
        </li>
    @endforeach
</ul>
    </div>
</div>

<section class="corpo" id="receitasIndex">
<div class="direita">
<h1>Lista de Receitas</h1> 
@if(count($receita)>0)
    @foreach($receita as $receita)
        <div class="well">
            <h3><a href="/receitas/{{$receita->id}}">{{$receita->nome}}</a></h3>
            <small>Criada em {{$receita->created_at}}</small>
        </div>
    @endforeach
    <a href="/receitas/create">Criar Receita</a>

@else
    <p>Sem receitas encontradas</p>
@endif
</div>
<div class="esquerda">
    ola
</div>
</section>

<footer id="rodape">
    @include('includes.footer')
</footer>

