<link rel="stylesheet" href="../css/menu.css">


<div class="nav">
        @include('includes.navbar')
</div>
<section class="corpo" id="receitasShow">
    @foreach ($receita as $receita)

        <h1>{{$receita->nome}}</h1>

        <p>{{$receita->created_at}}
        
    @endforeach


</section>
<footer id="rodape">
    @include('includes.footer')
</footer>
