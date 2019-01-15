<link rel="stylesheet" href="../css/menu.css">

<div class="nav">
        @include('includes.navbar')
</div>
@foreach ($ingrediente as $ingrediente)
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

            <p><select id="opcao">
                    <option value="">Selecione a Origem do alimento</option>
                    @foreach($listatipos as $lista)
                <option value="{{$lista->id}}">{{$lista->origemAlimento}}</option>
                    @endforeach

            </select>
        </div>

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}

    {!!Form::open(['action' => ['IngredientesController@destroy', $ingrediente->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    @endforeach
<footer id="rodape">
    @include('includes.footer')
</footer> 