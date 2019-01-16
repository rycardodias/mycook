@if (Auth::user()->tipoUtilizador=='3' OR Auth::user()->id == $receita->idUtilizador )
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
    <label for="utilizador">Insere o Utilizador:</label><br>
    <p><select class="textWidth form-control" name="utilizador" id="utilizador" type="text">
            <option disabled selected> > Selecione o User</option>
            @foreach($listausers as $listaus)
                <option value="{{$listaus->id}}">
                    {{$listaus->name}}
                </option>
            @endforeach
        </select>

    <label for="alimento">Origem Do Alimento:</label><br>
    <p><select class="textWidth form-control" name="alimento" id="alimento" type="text">
            <option disabled selected> > Selecione a Origem do alimento</option>
            @foreach($listatipos as $lista)
                <option value="{{$lista->id}}">
                    {{$lista->origemAlimento}}
                </option>
            @endforeach
        </select>


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
    @else
        <p>Sabes bem que não devias estar Aqui !</p>
    @endif