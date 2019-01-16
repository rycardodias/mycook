@if (Auth::user()->tipoUtilizador=='3' OR Auth::user()->id == $receita->idUtilizador )
    @foreach ($utilizador as $utilizador)
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
            <p>{{Form::label('password', 'password')}}
            <p>{{Form::text('password', $utilizador->password, ['class' => 'form-control', 'placeholder' => 'password'])}}
        </div>
        <div class="form-group">
        <p>{{Form::text('tipoUtilizador', $utilizador->tipoUtilizador, ['class' => 'form-control', 'placeholder' => 'tipoUtilizador','style' => 'visibility: hidden;'])}}
    </div>
        <div class="form-group">
            <p>{{Form::text('estadoConta', $utilizador->estadoConta, ['class' => 'form-control', 'placeholder' => 'estadoConta','style' => 'visibility: hidden;'])}}
        </div>
    <label for="sexo">Selecione o seu sexo:</label><br>
    <p><select class="textWidth form-control" name="sexo" id="sexo" type="text">
            <option disabled selected> > Selecione a Origem do alimento</option>
            @foreach($listasexo as $sexo)
                <option value="{{$sexo->id}}">
                    {{$sexo->sexo}}
                </option>
            @endforeach
        </select>

        <label for="faixa">Selecione a sua faixa Etária:</label><br>
    <p><select class="textWidth form-control" name="faixa" id="faixa" type="text">
            <option disabled selected> > Selecione a Origem do alimento</option>
            @foreach($listafaixas as $faixa)
                <option value="{{$faixa->id}}">
                    {{$faixa->faixaEtaria}}
                </option>
            @endforeach
        </select>

        <label for="atividade">Selecione a sua Atividade Fisica:</label><br>
    <p><select class="textWidth form-control" name="atividade" id="atividade" type="text">
            <option disabled selected> > Selecione a Origem do alimento</option>
            @foreach($listaatividade as $atividade)
                <option value="{{$atividade->id}}">
                    {{$atividade->nivelAtividade}}
                </option>
            @endforeach
        </select>

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}

    {!!Form::open(['action' => ['UtilizadoresController@destroy', $utilizador->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    @endforeach
@else
    <p>Sabes bem que não devias estar Aqui !</p>
@endif
