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
        <a  href="/" id="titulo">MyCook - Make life delicious</a>
        <!--<label for="toggle">&#9776;</label>
        <input type="checkbox" id="toggle"/> -->
        <div class="menu">
            <a href="/">Início</a> 
            <a href="sobre">Sobre</a>
            <a id="pagAtual" href="contactos">Contactos</a>
        </div>
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
        @include('posts.criarMensagens')
    </section>

    </section>
    
<footer id="rodape">
    <p>Copyright 2018 - by MyCook </p><br>
    <hgroup id="redesSociais">
        <a href="#" target="_blank">Facebook</a>&nbsp;
        <img align="middle" src="#">&nbsp;
        <a href="#" target="_blank">Instagram</a>
    </hgroup>
</footer>    
</body>
</html>
