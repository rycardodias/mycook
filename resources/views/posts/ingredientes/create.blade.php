<link rel="stylesheet" href="/../css/menu.css">

<div class="nav">
    @include('includes.navbar')
</div>´

<section class="corpo" id="ingredientesCreate">

<h1>Criar Ingredientes</h1>
{!! Form::open(['action' => 'IngredientesController@store', 'method' => 'POST']) !!}
<div class="form-group">
    <p>{{Form::label('nome', 'Nome')}}
    <p>{{Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Nome'])}}
</div>
<div class="form-group">
    <p>{{Form::label('descricao', 'descricao')}}
    <p>{{Form::textarea('descricao', '', [ 'class' => 'form-control', 'placeholder' => 'descricao', 'rows'=>'2'])}}
</div>

        <p>{{Form::text('idUtilizador', Auth::user()->id , ['class' => 'form-control', 'placeholder' => 'idUtilizador','style' => 'visibility: hidden;'])}}
<p><select class="textWidth form-control" name="alimento" id="alimento" type="text">
        <option disabled selected> > Selecione a Origem do alimento</option>
        @foreach($listatipos as $lista)
            <option value="{{$lista->id}}">
                {{$lista->origemAlimento}}
            </option>
        @endforeach
    </select>
    <p>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
</section>
    <footer id="rodape">
        @include('includes.footer')
    </footer>