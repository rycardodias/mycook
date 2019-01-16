<link rel="stylesheet" href="../css/menu.css">

<div class="nav">
    @include('includes.navbar')
</div>
<section class="corpo" id="receitasCreate">

    <h1>Insere Ingrediente na receita</h1>
    {!! Form::open(['action' => 'ingredientes_receitasController@store', 'method' => 'POST']) !!}

    <p><select class="textWidth form-control" name="ingrediente" id="ingrediente" type="text">
            <option disabled selected> > Selecione o ingrediente:</option>
            @foreach($ingredientes as $ingrediente)
                <option value="{{$ingrediente->id}}">
                    {{$ingrediente->nome}}
                </option>
            @endforeach
        </select>



    <p><select class="textWidth form-control" name="medida" id="medida" type="text">
            <option disabled selected> > Selecione a Unidade de medida:</option>
            @foreach($medidas as $medida)
                <option value="{{$medida->id}}">
                    {{$medida->unidadeMedida}}
                </option>
            @endforeach
        </select>

        <div class="form-group">
    <p>{{Form::label('quantidade:', 'quantidade')}}
    {{Form::text('quantidade', '', [ 'class' => 'form-control', 'placeholder' => 'Quantidade(consoante unidade de medida)'])}}

        </div>
        <div class="form-group">
    <p>{{Form::text('receita', $value , ['class' => 'form-control', 'placeholder' => 'receita','style' => 'visibility: hidden;'])}}
        </div>

        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}
</section>
<footer id="rodape">
    @include('includes.footer')
</footer>  