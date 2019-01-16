@foreach ($utilizador as $utilizador)

@if (Auth::user()->tipoUtilizador=='3' OR Auth::user()->id == $utilizador->id )

    <h1>Editar Utilizador</h1>
    {!! Form::open(['action' => ['UtilizadoresController@update', $utilizador->id], 'method' => 'POST']) !!}
        <div class="form-group">
            <p>{{Form::label('name', 'Nome')}}
            <p>{{Form::text('name', $utilizador->name, ['class' => 'form-control', 'placeholder' => 'Nome'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('email', 'Descricao')}}
            <p>{{Form::text('email', $utilizador->email, [ 'class' => 'form-control', 'placeholder' => 'email'])}}
        </div>
        <div class="form-group">
            
            <p>{{Form::text('password', $utilizador->password, ['class' => 'form-control', 'placeholder' => 'password','style' => 'visibility: hidden;'])}}
        </div>
        <div class="form-group">
        <p>{{Form::text('tipoUtilizador', $utilizador->tipoUtilizador, ['class' => 'form-control', 'placeholder' => 'tipoUtilizador','style' => 'visibility: hidden;'])}}
    </div>
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

        <label for="faixa"> Faixa Etária:</label><br>
    <p><select class="textWidth form-control" name="faixa" id="faixa" type="text">
            <option disabled selected> > Selecione a sua faixa Etária:</option>
            @foreach($listafaixa as $faixa)
                <option value="{{$faixa->id}}">
                    {{$faixa->faixaEtaria}}
                </option>
            @endforeach
        </select>

        <label for="atividade">Atividade Fisica:</label><br>
    <p><select class="textWidth form-control" name="atividade" id="atividade" type="text">
            <option disabled selected> > Selecione a sua Atividade Fisica:</option>
            @foreach($listaatividade as $atividade)
                <option value="{{$atividade->id}}">
                    {{$atividade->nivelAtividade}}
                </option>
            @endforeach
        </select>

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}


@else
    <p>Sabes bem que não devias estar Aqui !</p>
@endif
@endforeach
