<link rel="stylesheet" href="../css/menu.css">


<div class="nav">
    @include('includes.navbar')
</div>
<section class="corpo" id="showfilters">
    <div class="esquerda">
        <div class="filtroORigemAlimento">
            <h3>Origem Ingredientes</h3>
            <div class="opcao">
            @foreach($listaorigem as $lista)
                <p><a href="/origem/{{$lista->id}}">{{$lista->origemAlimento}}</a>
            @endforeach
            </div>
        </div>
        <p><a href="/ingredientes/create">Criar Ingrediente</a>

    </div>
    <div class="direita">
    <h1>Lista de Ingredientes</h1>
        <table>
            <tr>
                <th>Ingrediente</th>
                <th>Descrição</th>
                <th>Origem</th>
            </tr>
            @if(!empty($origem))
            @foreach ($origem as $origem)
                <tr id="lista">
                    <td><a href="/ingredientes/{{$origem->id}}">{{$origem->nome}}</a></td>
                    <td>{{$origem->descricao}}</td>
                    <td>{{$origem->origemAlimento}}</td>


                </tr>
        @endforeach
        </table>
        @else
            <p>Sem receitas encontradas</p>
        @endif

    </div>
</section>
<footer id="rodape">
    @include('includes.footer')
</footer>