<style>
.esquerdaa  {
    width: 75%;
    float: left;
}

.direitaa  s{
    width: 25%;
    float: right;
}
</style>
<div class="esquerda">
<h1>Lista de Receitas</h1> 
@if(count($receitas)>0)
    @foreach($receitas as $receita)
        <div class="well">
            <h3><a href="/receitas/{{$receita->id}}">{{$receita->nome}}</a></h3>
            <small>Criada em {{$receita->created_at}}</small>
        </div>
    @endforeach
@else
    <p>Sem receitas encontradas</p>
@endif
</div>
<div class="direita">
    ola
</div>

