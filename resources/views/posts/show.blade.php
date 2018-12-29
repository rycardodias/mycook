@extends(layouts.app)

@section('content')

    {!!Form::open(['action' => ['IngredientesController@destroy', $ingredientes->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection