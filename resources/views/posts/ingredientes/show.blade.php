<link rel="stylesheet" href="../css/menu.css">

<div class="nav">
        @include('includes.navbar')
</div>
<<<<<<< HEAD
<section class="corpo" id="ingredientesShow">
    <h1>Ingrediente</h1>

        <h3>{{$ingrediente->nome}}</h3>
=======

@foreach ($ingrediente as $ingrediente)

    <h1>{{$ingrediente->nome}}</h1>
    
>>>>>>> 118426c81a22d7c65dce0f71fba1a2cb78f15bd5
        <p>{{$ingrediente->descricao}}
        <p>{{$ingrediente->idUtilizador}}
        <p>{{$ingrediente->origemAlimento}}
        <p>{{$ingrediente->created_at}}
        <p>{{$ingrediente->updated_at}}

    <p><a href="/ingredientes/{{$ingrediente->id}}/edit" class="btn btn-default">Edit</a>
        @endforeach

    {!!Form::open(['action' => ['IngredientesController@destroy', $ingrediente->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    
</section>
    <footer id="rodape">
    @include('includes.footer')
</footer> 