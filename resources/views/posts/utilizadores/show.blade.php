<link rel="stylesheet" href="../css/menu.css">

<div class="nav">
    @include('includes.navbar')
</div>
@foreach ($utilizador as $user)
<div class="corpo" id="utilizadoresShow">
    <div class="esquerda">
        <img src="#" >
        <h3>Bem-vindo, {{$user->name}}</h3>
        <a href="/myaccount/{{ Auth::user()->id }}/edit" class="btn btn-default">Editar Perfil</a>
    </div>
    <div class="direita">
        <div>




                <h4>Email</h4> {{$user->email}}
                <h4>Sexo</h4> {{$user->sexo}}
            <h4>faixaEtaria</h4>  {{$user->faixaEtaria}}
            <h4>atividadeFisica</h4>  {{$user->nivelAtividade}}





    </div>

    <!-- {!!Form::open(['action' => ['UtilizadoresController@destroy', $user->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!} -->

    </div>
</div>
@endforeach
    <footer id="rodape">
    @include('includes.footer')
</footer> 

   
