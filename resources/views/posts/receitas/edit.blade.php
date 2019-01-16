@if (Auth::user()->tipoUtilizador=='3' OR Auth::user()->id == $receita->idUtilizador )
<link rel="stylesheet" href="../css/menu.css">

<div class="nav">
        @include('includes.navbar')
</div>
<section class="corpo" id="receitasEdit">
    @foreach ($receitas as $receita)
<h1>Editar Receita</h1>
{!! Form::open(['action' => ['ReceitasController@update', $receita->id], 'method' => 'POST']) !!}
    <div class="form-group">
        <p>{{Form::label('nome', 'Nome')}}
        <p>{{Form::text('nome', $receita->nome, ['class' => 'form-control', 'placeholder' => 'Nome'])}}
    </div>
    <div class="form-group">
        <p>{{Form::label('resumo', 'resumo')}}
        <p>{{Form::text('resumo', $receita->resumo, [ 'class' => 'form-control', 'placeholder' => 'resumo'])}}
    </div>
    <div class="form-group">
        <p>{{Form::label('detalhes', 'detalhes')}}
        <p>{{Form::text('detalhes', $receita->detalhes, [ 'class' => 'form-control', 'placeholder' => 'detalhes'])}}
    </div>
    <div class="form-group">
        <p>{{Form::label('nPassos', 'nPassos')}}
        <p>{{Form::text('nPassos', $receita->nPassos, ['class' => 'form-control', 'placeholder' => 'nPassos'])}}
    </div>
    <div class="form-group">
        <p>{{Form::label('nPessoas', 'nPessoas')}}
        <p>{{Form::text('nPessoas', $receita->nPessoas, ['class' => 'form-control', 'placeholder' => 'nPessoas'])}}
    </div>

    <label for="utilizadores">Utilizadores:</label><br>
    <p><select class="textWidth form-control" name="utilizadores" id="utilizadores" type="text">
            <option disabled selected> > Selecione o utilizador:</option>
            @foreach($listausers as $lista)
                <option value="{{$lista->id}}">
                    {{$lista->name}}
                </option>
            @endforeach
        </select>

    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}

{!!Form::open(['action' => ['ReceitasController@destroy', $receita->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}
</section>
@endforeach
<footer id="rodape">
    @include('includes.footer')
</footer>
@else
    <p>Sabes bem que não devias estar Aqui !</p>
@endif