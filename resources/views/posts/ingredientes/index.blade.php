<link rel="stylesheet" href="../css/menu.css">
<div class="nav">
    @include('includes.navbar')
</div>
<section class="corpo" id="ingredientesIndex">
    <div class="direita">
<h1>Lista de Ingredientes</h1>
@if(count($ingredientes)>0)
    @foreach($ingredientes as $ingrediente)
        <div class="well">
            <h3><a href="/ingredientes/{{$ingrediente->id}}">{{$ingrediente->nome}}</a></h3>
            <small>Criada em {{$ingrediente->created_at}}</small>
        </div>
    @endforeach
@else
    <p>Sem mensagens encontradas</p>
@endif
</section>
</div>
<div class="esquerda">
</div>

<footer id="rodape">
    @include('includes.footer')
</footer> 
