<link rel="stylesheet" href="../css/menu.css">

<div class="nav">
        @include('includes.navbar')
</div>
    <h1>Editar idOrigem</h1>
    {!! Form::open(['action' => ['IngredientesController@update', $ingrediente->id], 'method' => 'POST']) !!}
        <div class="form-group">
            <p>{{Form::label('nome', 'Nome')}}
            <p>{{Form::text('nome', $ingrediente->nome, ['class' => 'form-control', 'placeholder' => 'Nome'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('descricao', 'Descricao')}}
            <p>{{Form::text('descricao', $ingrediente->descricao, [ 'class' => 'form-control', 'placeholder' => 'Descricao'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('idUtilizador', 'idUtilizador')}}
            <p>{{Form::text('idUtilizador', $ingrediente->idUtilizador, ['class' => 'form-control', 'placeholder' => 'idUtilizador'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('idOrigem', 'idOrigem')}}
            <p>{{Form::text('idOrigem', $ingrediente->idOrigem, ['class' => 'form-control', 'placeholder' => 'idOrigem'])}}
        </div>

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}

    {!!Form::open(['action' => ['IngredientesController@destroy', $ingrediente->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    
<footer id="rodape">
    @include('includes.footer')
</footer> 