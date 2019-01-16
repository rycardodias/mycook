<link rel="stylesheet" href="../css/menu.css">

<div class="nav">
        @include('includes.navbar')
</div>
<section>
@foreach ($ingrediente as $ingrediente)

    <h1>{{$ingrediente->nome}}</h1>
    
        <p>{{$ingrediente->descricao}}
        <p>{{$ingrediente->origemAlimento}}
        <p>{{$ingrediente->name}}
        <p>{{$ingrediente->created_at}}
        <p>{{$ingrediente->updated_at}}

        @endforeach

    @if (Auth::user()->tipoUtilizador=='3' OR Auth::user()->id == $ingrediente->idUtilizador )
    <p><a href="/ingredientes/{{$ingrediente->id}}/edit" class="btn btn-default">Edit</a>
    {!!Form::open(['action' => ['IngredientesController@destroy', $ingrediente->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    @endif

</section>
    <footer id="rodape">
    @include('includes.footer')
</footer> 