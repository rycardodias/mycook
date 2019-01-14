<link rel="stylesheet" href="../css/menu.css">

<div class="nav">
    @include('includes.navbar')
</div>

    <h1>Criar Receitas</h1>
    {!! Form::open(['action' => 'ReceitasController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            <p>{{Form::label('nome', 'Nome')}}
            <p>{{Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Nome'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('resumo', 'resumo')}}
            <p>{{Form::text('resumo', '', [ 'class' => 'form-control', 'placeholder' => 'resumo'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('nPassos', 'nPassos')}}
            <p>{{Form::text('nPassos', '', ['class' => 'form-control', 'placeholder' => 'nPassos'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('nPessoas', 'nPessoas')}}
            <p>{{Form::text('nPessoas', '', ['class' => 'form-control', 'placeholder' => 'nPessoas'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('idUtilizador', 'idUtilizador')}}
            <p>{{Form::text('idUtilizador', '', ['class' => 'form-control', 'placeholder' => 'idUtilizador'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}
<footer id="rodape">
    @include('includes.footer')
</footer>  