<link rel="stylesheet" href="../css/menu.css">

<div class="nav">
        @include('includes.navbar')
</div>
<section class="corpo" id="ingredientesShow">
    <h1>Ingrediente</h1>

        <h3>{{$ingrediente->nome}}</h3>
        <p>{{$ingrediente->descricao}}
        <p>{{$ingrediente->idUtilizador}}
        <p>{{$ingrediente->idOrigem}}
        <p>{{$ingrediente->created_at}}
        <p>{{$ingrediente->updated_at}}

    <p><a href="/ingredientes/{{$ingrediente->id}}/edit" class="btn btn-default">Edit</a>

    {!!Form::open(['action' => ['IngredientesController@destroy', $ingrediente->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    
</section>
    <footer id="rodape">
    @include('includes.footer')
</footer> 