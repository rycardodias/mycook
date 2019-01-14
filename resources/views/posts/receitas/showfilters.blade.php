<link rel="stylesheet" href="../css/menu.css">

<div class="nav">
    @include('includes.navbar')
</div>
<section class="corpo" id="receitasIndex">
    <div class="direita">
        <h1>Lista de Receitas</h1>
    @foreach ($tipos as $tipo)
            <h1>{{$tipos->nome}}</h1>

            <p>{{$tipo->created_at}}
            <p>{{$ingrediente->idUtilizador}}
            <p>{{$ingrediente->origemAlimento}}
            <p>{{$ingrediente->created_at}}
            <p>{{$ingrediente->updated_at}}

        @endforeach

    </div>
</section>

        <footer id="rodape">
            @include('includes.footer')
        </footer>