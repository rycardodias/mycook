@extends('layouts.formularioMensagens')

@section('content')
    <h1>Editar Mensagem</h1>
    {!! Form::open(['action' => ['IngredientesController@update', $ingredientes->id], 'method' => 'POST']) !!}
        <div class="form-group">
            <p>{{Form::label('nome', 'Nome')}}
            <p>{{Form::text('nome', $ingredientes->nome, ['class' => 'form-control', 'placeholder' => 'Nome'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('descricao', 'Descricao')}}
            <p>{{Form::text('descricao', $ingredientes->descricao, [ 'class' => 'form-control', 'placeholder' => 'Descricao'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('idUnidadeMedida', 'IdUnidadeMedida')}}
            <p>{{Form::text('idUnidadeMedida', $ingredientes->idUnidadeMedida, ['class' => 'form-control', 'placeholder' => 'IdUnidadeMedida'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('idOrigem', 'idOrigem')}}
            <p>{{Form::text('idOrigem', $ingredientes->idOrigem, ['class' => 'form-control', 'placeholder' => 'idOrigem'])}}
        </div>

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}
@endsection