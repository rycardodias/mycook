<div class="nav">
        @include('includes.navbar')
</div>
<h1>{{$receita->nome}}</h1>
    <p>{{$receita->resumo}}
    <p>{{$receita->nPassos}}
    <p>{{$receita->nPessoas}}
    <p>{{$receita->idUtilizador}}
    <p>{{$receita->created_at}}
    <p>{{$receita->updated_at}}

<p><a href="/receitas/{{$receita->id}}/edit" class="btn btn-default">Edit</a>

{!!Form::open(['action' => ['ReceitasController@destroy', $receita->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}
   
<footer id="rodape">
    @include('includes.footer')
</footer> 
