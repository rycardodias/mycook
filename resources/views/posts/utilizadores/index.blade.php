@if (Auth::user()->tipoUtilizador=='3')
<link rel="stylesheet" href="../css/menu.css">

<div class="nav">
    @include('includes.navbar')
</div>
<h1>Lista de Utilizadores</h1>

<table>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Tipo de Utilizador</th>
        <th>Estado do Utilizador</th>
        <th>Faixa Etária</th>
        <th>Atividade Física</th>
        <th>Editar User</th>
    </tr>
    @foreach($utilizador as $user)
        <tr id="lista">
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->tipoUtilizador}}</td>
            <td>{{$user->estadoUtilizador}}</td>
            <td>{{$user->faixaEtaria}}</td>
            <td>{{$user->atividadeFisica}}</td>
            <td><a href="/myaccount/{{$user->id}}/edit" class="btn btn-default">Editar Perfil</a></td>
        </tr>
    @endforeach
</table>

@else
    <p>Sabes bem que não devias estar Aqui !</p>
@endif

