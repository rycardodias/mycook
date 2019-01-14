<link rel="stylesheet" href="../css/menu.css">

<div class="nav">
        @include('includes.navbar')
</div>

    <h1>Criar Ingredientes</h1>
    {!! Form::open(['action' => 'IngredientesController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            <p>{{Form::label('nome', 'Nome')}}
            <p>{{Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Nome'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('descricao', 'descricao')}}
            <p>{{Form::text('descricao', '', [ 'class' => 'form-control', 'placeholder' => 'descricao'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('idUtilizador', 'idUtilizador')}}
            <p>{{Form::text('idUtilizador', '', ['class' => 'form-control', 'placeholder' => 'idUtilizador'])}}
        </div>
        <div class="form-group">
            <p>{{Form::label('idOrigem', 'idOrigem')}}
            <p>{{Form::text('idOrigem', '', ['class' => 'form-control', 'placeholder' => 'idOrigem'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}

    <footer id="rodape">
    @include('includes.footer')
</footer>  