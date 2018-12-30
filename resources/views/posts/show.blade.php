@extends('layouts.app')

@section('content')
    <h1>{{$mensagem->nome}}</h1>
    <div>
        <p>{{$mensagem->email}}
        <p>{{$mensagem->assunto}}
        <p>{{$mensagem->mensagem}}
    </div>
    <a href="/mensagens/{{$mensagem->id}}/edit" class="btn btn-default">Edit</a>
   
@endsection