@extends('layouts.formularioIngredientes')

@section('content')
    <h1>Criar Ingrediente</h1>
    {!! Form::open(['action' => 'IngredientesController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            <p>{{Form::label('nome', 'Nome')}}
            <p>{{Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Nome'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('descricao', 'Descricao')}}
            <p>{{Form::text('descricao', '', [ 'class' => 'form-control', 'placeholder' => 'Descricao'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('idUnidadeMedida', 'idUnidadeMedida')}}
            <p>{{Form::text('idUnidadeMedida', '', ['class' => 'form-control', 'placeholder' => 'idUnidadeMedida'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('idOrigem', 'idOrigem')}}
            <p>{{Form::text('idOrigem', '', ['class' => 'form-control', 'placeholder' => 'idOrigem'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('idUtilizador', 'idUtilizador')}}
            <p>{{Form::text('idUtilizador', '', ['class' => 'form-control', 'placeholder' => 'idUtilizador'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}
@endsection