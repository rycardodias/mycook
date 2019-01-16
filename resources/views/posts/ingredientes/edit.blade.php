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
        <p>{{Form::textarea('descricao', $ingrediente->descricao, [ 'class' => 'form-control', 'placeholder' => 'Descricao', 'rows'=>'2'])}}
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
<br><br>
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


        @endforeach
        <footer id="rodape">
            @include('includes.footer')
        </footer>
