<link rel="stylesheet" href="../css/menu.css">

<div class="nav">
    @include('includes.navbar')
</div>
<div class="corpo" id="utilizadoresShow">
    <div class="esquerda">
        <img src="#" >
        <h3>Bem-vindo, {{$utilizador->name}}</h3>
        <a href="/myaccount/{{ Auth::user()->id }}/edit" class="btn btn-default">Editar Perfil</a>
    </div>
    <div class="direita">

    
    <div>
        <h4>Sexo</h4> {{$utilizador->sexo}}
        <h4>faixaEtaria</h4>  {{$utilizador->faixaEtaria}}
        <h4>atividadeFisica</h4>  {{$utilizador->atividadeFisica}}

    </div>

    <!-- {!!Form::open(['action' => ['UtilizadoresController@destroy', $utilizador->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!} -->
    </div>
</div>
    <footer id="rodape">
    @include('includes.footer')
</footer> 

   
