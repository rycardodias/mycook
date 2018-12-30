@extends('layouts.app')

@section('content')
    <h1>POSTs</h1>
    @if(count($mensagens)>0)
        @foreach($mensagens as $mensagem)
            <div class="well">
                <h3>{{$mensagem->nome}}</h3>
            </div>
        @endforeach
    @else
        <p>Sem mensagens encontradas</p>
    @endif
@endsection