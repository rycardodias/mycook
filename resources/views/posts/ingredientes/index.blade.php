<link rel="stylesheet" href="../css/menu.css">

<div class="nav">
    @include('includes.navbar')
</div>
<section class="corpo" id="ingredientesIndex">
    <div class="direita">
<h1>Lista de Ingredientes</h1>
@if(count($ingredientes)>0)
    <table>
        <tr>
            <th>Ingrediente</th>
            <th>Descrição</th>
            <th>Origem</th>
            <th>Ver mais</th>
        </tr>
    @foreach($ingredientes as $ingrediente)
            <tr>
                <td>{{$ingrediente->nome}}</td>
                <td>{{$ingrediente->descricao}}</td>
                <td>{{$ingrediente->origemAlimento}}</td>
                <td><a href="/ingredientes/{{$ingrediente->id}}">Ver mais</a></td>
            </tr>
            @endforeach
        </table>
    
@else
    <p>Sem mensagens encontradas</p>
@endif
</section>
</div>
<div class="esquerda">
</div>

<footer id="rodape">
    @include('includes.footer')
</footer> 
