<link rel="stylesheet" href="../css/menu.css">

<div class="nav">
        @include('includes.navbar')
</div>
<section class="corpo" id="receitasEdit">

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
    <div class="form-group">
        <p>{{Form::label('idUtilizador', 'idUtilizador')}}
        <p>{{Form::text('idUtilizador', $receita->idUtilizador, ['class' => 'form-control', 'placeholder' => 'idUtilizador'])}}
    </div>

    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}

{!!Form::open(['action' => ['ReceitasController@destroy', $receita->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}
</section>  
<footer id="rodape">
    @include('includes.footer')
</footer>    
