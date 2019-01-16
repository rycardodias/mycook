<link rel="stylesheet" href="../css/menu.css">

<div class="nav">
    @include('includes.navbar')
</div>
<section class="corpo" id="receitasCreate">

    <h1>Criar Receitas</h1>
    {!! Form::open(['action' => 'ReceitasController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            <p>{{Form::label('nome', 'Nome')}}
            <p>{{Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Nome'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('resumo', 'resumo')}}
            <p>{{Form::textarea('resumo', '', [ 'class' => 'form-control', 'placeholder' => 'resumo','rows'=>'2'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('detalhes', 'detalhes')}}
            <p>{{Form::textarea('detalhes', '', [ 'class' => 'form-control', 'placeholder' => 'detalhes','rows'=>'2'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('nPassos', 'nPassos')}}
            <p>{{Form::textarea('nPassos', '', ['class' => 'form-control', 'placeholder' => 'nPassos', 'rows'=>'2'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('nPessoas', 'nPessoas')}}
            <p>{{Form::text('nPessoas', '', ['class' => 'form-control', 'placeholder' => 'nPessoas'])}}
        </div>
        <div class="form-group">

            <p>{{Form::text('idUtilizador', Auth::user()->id , ['class' => 'form-control', 'placeholder' => 'idUtilizador','style' => 'visibility: hidden;'])}}
        </div>


        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}
</section>
<footer id="rodape">
    @include('includes.footer')
</footer>  