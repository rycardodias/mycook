<link rel="stylesheet" href="../css/menu.css">

<div class="nav">
        @include('includes.navbar')
</div>
<section class="corpo">
@foreach ($ingrediente as $ingrediente)

    <h1>{{$ingrediente->nome}}</h1>
        <p><h4> Descrição</h4>
        <p>{{$ingrediente->descricao}}
        <p><h4> Origem do Alimento </h4>
        <p>{{$ingrediente->origemAlimento}}

        <p><h4> Criada em</h4>
        <p>{{$ingrediente->created_at}}


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