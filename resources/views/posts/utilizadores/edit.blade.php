
    <h1>Editar Utilizador</h1>
    {!! Form::open(['action' => ['UtilizadoresController@update', $utilizador->id], 'method' => 'POST']) !!}
        <div class="form-group">
            <p>{{Form::label('name', 'Nome')}}
            <p>{{Form::text('name', $utilizador->name, ['class' => 'form-control', 'placeholder' => 'Nome'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('email', 'Descricao')}}
            <p>{{Form::text('email', $utilizador->email, [ 'class' => 'form-control', 'placeholder' => 'email'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('password', 'password')}}
            <p>{{Form::text('password', $utilizador->password, ['class' => 'form-control', 'placeholder' => 'password'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('tipoUtilizador', 'tipoUtilizador')}}
            <p>{{Form::text('tipoUtilizador', $utilizador->tipoUtilizador, ['class' => 'form-control', 'placeholder' => 'tipoUtilizador'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('estadoConta', 'estadoConta')}}
            <p>{{Form::text('estadoConta', $utilizador->estadoConta, ['class' => 'form-control', 'placeholder' => 'estadoConta'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('sexo', 'sexo')}}
            <p>{{Form::text('sexo', $utilizador->sexo, ['class' => 'form-control', 'placeholder' => 'sexo'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('faixaEtaria', 'faixaEtaria')}}
            <p>{{Form::text('faixaEtaria', $utilizador->faixaEtaria, ['class' => 'form-control', 'placeholder' => 'faixaEtaria'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('atividadeFisica', 'atividadeFisica')}}
            <p>{{Form::text('atividadeFisica', $utilizador->atividadeFisica, ['class' => 'form-control', 'placeholder' => 'atividadeFisica'])}}
        </div>

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}

    {!!Form::open(['action' => ['UtilizadoresController@destroy', $utilizador->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
