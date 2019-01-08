<h1>Lista de Receitas</h1> 
@if(count($receitas)>0)
    @foreach($receitas as $receita)
        <div class="well">
            <h3><a href="/receitas/{{$receita->id}}">{{$receita->nome}}</a></h3>
            <small>Criada em {{$receita->created_at}}</small>
        </div>
    @endforeach
@else
    <p>Sem mensagens encontradas</p>
@endif
