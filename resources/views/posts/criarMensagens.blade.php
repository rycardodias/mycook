@extends('layouts.formularioMensagens')

@section('content')
    <h1>Enviar Mensagem</h1>
    {!! Form::open(['action' => 'MensagensController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            <p>{{Form::label('nome', 'Nome')}}
            <p>{{Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Nome'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('email', 'Email')}}
            <p>{{Form::text('email', '', [ 'class' => 'form-control', 'placeholder' => 'Email'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('assunto', 'Assunto')}}
            <p>{{Form::text('assunto', '', ['class' => 'form-control', 'placeholder' => 'Assunto'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('mensagem', 'Mensagem')}}
            <p>{{Form::text('mensagem', '', ['class' => 'form-control', 'placeholder' => 'Mensagem'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}
@endsection