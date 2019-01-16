@if (Auth::user()->tipoUtilizador=='3')
<link rel="stylesheet" href="../css/menu.css">

<div class="nav">
    @include('includes.navbar')
</div>
   <h1>Lista de Mensagens/tickets</h1>

    <table>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Assunto</th>
            <th>Mensagens</th>
            <th>Recebido Em </th>
            <th>Eliminar Ticket</th>
        </tr>
        @foreach($mensagens as $mensagem)
            <tr id="lista">
                <td>{{$mensagem->nome}}</td>
                <td>{{$mensagem->email}}</td>
                <td>{{$mensagem->assunto}}</td>
                <td>{{$mensagem->mensagem}}</td>
                <td>{{$mensagem->created_at}}</td>
                <td>{!!Form::open(['action' => ['MensagensController@destroy', $mensagem->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}</td>
            </tr>
        @endforeach
    </table>

@else
    <p>Sabes bem que não devias estar Aqui !</p>
@endif

