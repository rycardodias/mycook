@extends('layouts.app')

@section('content')
    <h1>{{$receita->nome}}</h1>
    <div>
        <p>{{$receita->descricao}}
        <p>{{$receita->idUtilizador}}
        <p>{{$receita->idOrigem}}
    </div>
    <a href="/receitas/{{$receita->id}}/edit" class="btn btn-default">Edit</a>

    {!!Form::open(['action' => ['ReceitasController@destroy', $receita->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
   
@endsection