<link rel="stylesheet" href="../css/menu.css">

<div class="nav">
    @include('includes.navbar')
</div>
<div class="corpo" id="mensagemShow">
    <div class="esquerda">
        <h1>{{$mensagem->nome}}</h1>
    </div>
    <div class="direita">
        <p>{{$mensagem->email}}
        <p>{{$mensagem->assunto}}
        <p>{{$mensagem->mensagem}}
        
        {!!Form::open(['action' => ['MensagensController@destroy', $mensagem->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    </div>
</div>
<footer id="rodape">
    @include('includes.footer')
</footer> 