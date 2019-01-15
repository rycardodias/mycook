<link rel="stylesheet" href="../css/menu.css">

<div class="nav">
    @include('includes.navbar')
</div>
   <h1>Lista de Mensagens</h1>
    @if(count($mensagens)>0)
        @foreach($mensagens as $mensagem)
            <div class="well">
                <h3><a href="/mensagens/{{$mensagem->id}}">{{$mensagem->nome}}</a></h3>
                <small>Criada em {{$mensagem->created_at}}</small>
            </div>
        @endforeach
    @else
        <p>Sem mensagens encontradas</p>
    @endif
