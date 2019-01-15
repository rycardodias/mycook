

    <h1>{{$utilizador->name}}</h1>
    <div>
        <p>{{$utilizador->email}}
        <p>{{$utilizador->tipoUtilizador}}
        <p>{{$utilizador->estadoConta}}
        <p>{{$utilizador->sexo}}
        <p>{{$utilizador->faixaEtaria}}
        <p>{{$utilizador->atividadeFisica}}

    </div>
    <a href="/myaccount/{{ Auth::user()->id }}/edit" class="btn btn-default">Edit</a>

    {!!Form::open(['action' => ['UtilizadoresController@destroy', $utilizador->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
   
