@extends('layouts.app')

@section('content')
    <h1>Editar Mensagem</h1>
    {!! Form::open(['action' => ['MensagensController@update', $mensagem->id], 'method' => 'POST']) !!}
        <div class="form-group">
            <p>{{Form::label('nome', 'Nome')}}
            <p>{{Form::text('nome', $mensagem->nome, ['class' => 'form-control', 'placeholder' => 'Nome'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('email', 'Email')}}
            <p>{{Form::text('email', $mensagem->email, [ 'class' => 'form-control', 'placeholder' => 'Email'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('assunto', 'Assunto')}}
            <p>{{Form::text('assunto', $mensagem->assunto, ['class' => 'form-control', 'placeholder' => 'Assunto'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('mensagem', 'Mensagem')}}
            <p>{{Form::text('mensagem', $mensagem->mensagem, ['class' => 'form-control', 'placeholder' => 'Mensagem'])}}
        </div>

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}

    {!!Form::open(['action' => ['MensagensController@destroy', $mensagem->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection