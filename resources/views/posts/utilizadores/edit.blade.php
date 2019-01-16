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
    @include('includes.navbar')
</div>

@foreach ($utilizador as $utilizador)

@if (Auth::user()->tipoUtilizador=='3' OR Auth::user()->id == $utilizador->id )

    <h1>Editar Utilizador</h1>
    {!! Form::open(['action' => ['UtilizadoresController@update', $utilizador->id], 'method' => 'POST']) !!}
        <div class="form-group">
            <p>{{Form::label('name', 'Nome')}}
            <p>{{Form::text('name', $utilizador->name, ['class' => 'form-control', 'placeholder' => 'Nome'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('email', 'Email')}}
            <p>{{Form::text('email', $utilizador->email, [ 'class' => 'form-control', 'placeholder' => 'email'])}}
        </div>
            {{Form::text('password', $utilizador->password, ['class' => 'form-control', 'placeholder' => 'password','style' => 'visibility: hidden;'])}}
            {{Form::text('tipoUtilizador', $utilizador->tipoUtilizador, ['class' => 'form-control', 'placeholder' => 'tipoUtilizador','style' => 'visibility: hidden;'])}}
    
        <div class="form-group">
            <p>{{Form::text('estadoConta', $utilizador->estadoConta, ['class' => 'form-control', 'placeholder' => 'estadoConta','style' => 'visibility: hidden;'])}}
        </div>
    <label for="sexo">Sexo:</label><br>
    <p><select class="textWidth form-control" name="sexo" id="sexo" type="text">
            <option disabled selected> > Selecione o seu sexo:</option>
            @foreach($listasexo as $sexo)
                <option value="{{$sexo->id}}">
                    {{$sexo->sexo}}
                </option>
            @endforeach
        </select>

        <p><label for="faixa"> Faixa Etária:</label><br>
    <p><select class="textWidth form-control" name="faixa" id="faixa" type="text">
            <option disabled selected> > Selecione a sua faixa Etária:</option>
            @foreach($listafaixa as $faixa)
                <option value="{{$faixa->id}}">
                    {{$faixa->faixaEtaria}}
                </option>
            @endforeach
        </select>

        <p><label for="atividade">Atividade Fisica:</label><br>
    <p><select class="textWidth form-control" name="atividade" id="atividade" type="text">
            <option disabled selected> > Selecione a sua Atividade Fisica:</option>
            @foreach($listaatividade as $atividade)
                <option value="{{$atividade->id}}">
                    {{$atividade->nivelAtividade}}
                </option>
            @endforeach
        </select>
    <p>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}


@else
    <p>Sabes bem que não devias estar Aqui !</p>
@endif
@endforeach

<footer id="rodape">
    @include('includes.footer')
</footer>
