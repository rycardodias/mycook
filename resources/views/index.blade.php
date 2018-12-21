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
@include('.includes.navbar')
    <div class="nav">
        <a  href="index.html" id="titulo">MyCook - Make life delicious</a>
        <!--<label for="toggle">&#9776;</label>
        <input type="checkbox" id="toggle"/> -->
        <div class="menu">
          <a id="pagAtual" href="index.html">Início</a> 
           <a href="sobre.html">Sobre</a>
           <a href="contactos.html">Contactos</a>
        </div>
    </div>
    <section class="corpo" id="index">
        <div class="video">
            <video width="320" height="240" controls>
                <source src="#" type="video/mp4">
                <source src="#" type="video/ogg">
            </video>
        </div>
        <div class="login">

                        @include('.auth.login')

        </div>
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