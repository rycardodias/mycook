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
    
    <section class="corpo" id="sobre">
    <section class="texto" id="contactos">
        <h1>Contactos</h1>
        <p>Fale com a nossa equipa. Envie-nos uma mensagem.</p>
    </section>
    
    <section id="info">
        <p>Monserrate, Viana do Castelo</p>
        <p>Telefone: +351 xxx xxx xxx</p>
        <p>Email: xxxxxx@gmail.com</p>
    </section>
    <section id="formulario">
        @include('posts.mensagens.criarMensagens')
    </section>

    </section>
    
<footer id="rodape">
    @include('includes.footer')
</footer>    
</body>
</html>
