
@extends('layouts.app')

@section('content')
    <h1>Criar Utilizador</h1>
    {!! Form::open(['action' => 'UtilizadoresController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            <p>{{Form::label('name', 'Nome')}}
            <p>{{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Nome'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('email', 'email')}}
            <p>{{Form::text('email', '', [ 'class' => 'form-control', 'placeholder' => 'email'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('password', 'password')}}
            <p>{{Form::text('password', '', ['class' => 'form-control', 'placeholder' => 'password'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}
@endsection