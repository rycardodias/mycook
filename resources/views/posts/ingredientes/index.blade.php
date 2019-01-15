<link rel="stylesheet" href="../css/menu.css">

<div class="nav">
    @include('includes.navbar')
</div>
<section class="corpo" id="ingredientesIndex">
    <div class="esquerda">
        <div class="filtroORigemAlimento">
                <h3>Origem Alimentos</h3>
                <div class="opcao">
            @foreach($lista as $lista)
                <p><a href="/origem/{{$lista->id}}">{{$lista->origemAlimento}}</a>
            @endforeach
                    <p><a href="/ingredientes/create">Criar Receita</a>
        </div>
    </div>
    </div>
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
                <tr id="lista">
                    <td>{{$ingrediente->nome}}</td>
                    <td>{{$ingrediente->descricao}}</td>
                    <td>{{$ingrediente->origemAlimento}}</td>
                    <td><a href="/ingredientes/{{$ingrediente->id}}">Ver mais</a></td>
                </tr>
            @endforeach
            </table>
        @else
            <p>Sem Ingredientes encontrados</p>
        @endif
    </div>
</section>
</div>


<footer id="rodape">
    @include('includes.footer')
</footer> 
