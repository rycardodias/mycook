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
                <h3><a href="/origem/{{$lista->id}}">{{$lista->origemAlimento}}</a></h3>
            @endforeach
            </div>
        </div>
    </div>
<<<<<<< HEAD
    <div class="direita">
    <h1>Lista de Ingredientes</h1>
        <p><a href="/ingredientes/create">Criar Ingrediente</a>
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
                </tr>
        @endforeach
        </table>
=======
    </div>

<section class="corpo" id="receitasShow">
    @if(!empty($origem))
    @foreach ($origem as $origem)

        <h5> Filtro {{$origem->origemAlimento}}</h5>
            <h3><a href="/ingredientes/{{$origem->id}}">{{$origem->nome}}</a></h3>
            <h3>{{$origem->nome}}</h3>
        <p>{{$origem->created_at}}
    @endforeach

>>>>>>> ced036f93edc8d68563128115d7f8033499c2efd
        @else
            <p>Sem receitas encontradas</p>
        @endif

    </div>
</section>
<footer id="rodape">
    @include('includes.footer')
</footer>