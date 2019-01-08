@extends('layouts.app')

@section('content')
    <h1>{{$ingrediente->nome}}</h1>
    <div>
        <p>{{$ingrediente->descricao}}
        <p>{{$ingrediente->idUtilizador}}
        <p>{{$ingrediente->idOrigem}}
    </div>
    <a href="/ingredientes/{{$ingrediente->id}}/edit" class="btn btn-default">Edit</a>

    {!!Form::open(['action' => ['IngredientesController@destroy', $ingrediente->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
   
@endsection