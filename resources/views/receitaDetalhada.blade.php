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
          <a id="pagAtual" href="index.html">Minha Conta</a> 
           <a href="sobre.html">Sair</a>
        </div>
    </div>
    <section class="corpo" id="index">
        <div class="receita">
            <img src="#" >
            <h1>Texto</h1>
            <p>Descrição</p>
        </div>
        <div class="detalhes">
            <h1>Receita Detalhada</h1>
            <p>Textinho</p>
            <h2>Passos</h2>
            <p>passo a passo</p>
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