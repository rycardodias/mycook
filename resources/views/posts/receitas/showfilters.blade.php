<link rel="stylesheet" href="../css/menu.css">


<div class="nav">
    @include('includes.navbar')
</div>
<section class="corpo" id="receitasShow">
    @foreach ($tipos as $tipo)
        <h1>{{$tipo->nome}}</h1>
        <p>{{$tipo->created_at}}
    @endforeach


</section>
<footer id="rodape">
    @include('includes.footer')
</footer>