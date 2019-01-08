<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Laravel</title>
</head>
<body>
    <div class="nav">
        @include('includes.navbar')
    </div>
        <section id="formulario">
            @include('posts.receitas.show')
        </section>
    </section>
    
<footer id="rodape">
    @include('includes.footer')
</footer>    
</body>
</html>