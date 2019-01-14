<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Styles -->
<!--        <link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
        <link rel="stylesheet" href="css/menu.css">

        <title>MyCook</title>
</head>
<body>
    <div class="nav">
        @include('includes.navbar')
    </div>

    <select id="tipoID">
        <option value="">Escolha o seu Tipo</option>

        @foreach($tipos as $tipo)
            <option class="option" value="">{{$tipo->tipoConsumidor}}</option>
        @endforeach
    </select>
        <section id="formulario">
            @include('posts.receitas.index')
            <a href="/receitas/create">Criar Receita</a>
        </section>
    </section>
    
<footer id="rodape">
    @include('includes.footer')
</footer>    
</body>
</html>
