<style>

    html {
        font-family: "helvetica neue", sans-serif;
    }
        .menu {
        margin: 0 30px 0 0;
    }

    .menu a {
        clear: right;
        text-decoration: none;
        color: gray;
        margin: 0 10px;
        line-height: 70px;
    }

    a#titulo {
        position: absolute;
        left: 20px;
        color: gray;
        font-size: 18px;
        text-transform:uppercase;
        text-decoration: none;
    }
    .nav {
        border-bottom: 1px solid #EAEAEB;
        text-align: right;
        height: 70px;
        line-height: 70px;
    }

    footer {
        text-align: center;
        border-top: 1px solid #EAEAEB;
        bottom: 0;

    }

    footer p{
        text-transform:full-width;
        margin: 5px auto -15px auto;
    }
    hgroup#redesSociais a {
    text-decoration: none;
    color:grey;
    text-transform:full-width;
    font-size: 14px;
    }
    hgroup#redesSociais a:hover {
        color: coral;
    }
    a#pagAtual {
        color:coral;
    }
</style>
<div class="nav">
    <a  href="/" id="titulo">MyCook - Make life delicious</a>
    <div class="menu">
    @if (Auth::user()->tipoUtilizador=='3')
        @endif
        <a href="/">Início</a> 
        <a href="/sobre">Sobre</a>
        <a  href="/contactos">Contactos</a> |
        <a id="pagAtual" href="/receitas">Receitas</a>
        <a href="/ingredientes">Ingredientes</a>
        @if(Auth::guest())
    @else
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Sair') }}</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
    @endif
    </div>
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
        <p>{{Form::text('resumo', $receita->resumo, [ 'class' => 'form-control', 'placeholder' => 'resumo', 'rows'=>'2'])}}
    </div>
    <div class="form-group">
        <p>{{Form::label('detalhes', 'detalhes')}}
        <p>{{Form::text('detalhes', $receita->detalhes, [ 'class' => 'form-control', 'placeholder' => 'detalhes', 'rows'=>'2'])}}
    </div>
    <div class="form-group">
        <p>{{Form::label('nPassos', 'nPassos')}}
        <p>{{Form::text('nPassos', $receita->nPassos, ['class' => 'form-control', 'placeholder' => 'nPassos', 'rows'=>'2'])}}
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


</section>
@endforeach
<footer id="rodape">
    @include('includes.footer')
</footer>
