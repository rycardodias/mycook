    <h1>Lista de Utilizadores</h1>
    @if(count($utilizador)>0)
        @foreach($utilizador as $user)
            <div class="well">
                <h3><a href="/myaccount/{{$user->id}}">{{$user->name}}</a></h3>
                <small>Criada em {{$user->created_at}}</small>
            </div>
        @endforeach
    @else
        <p>Sem mensagens encontradas</p>
    @endif
