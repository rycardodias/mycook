<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Styles -->
        <link rel="stylesheet" href="css/menu.css">

        <title>Laravel</title>
</head>
<body>
    <div class="nav">
        <a  href="index.html" id="titulo">MyCook - Make life delicious</a>
        <!--<label for="toggle">&#9776;</label>
        <input type="checkbox" id="toggle"/> -->
        <div class="menu">
            <a id="pagAtual" href="myaccount">Minha Conta</a> 
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Sair') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
        </div>
    </div>
    <section class="corpo" id="index">
        <div class="editarReceita">
            <p><input id="nome" maxlength="15" placeholder="Nome" required></p>
            <p><input id="descricao" maxlength="30" placeholder="Descrição" required></p>
            <p>
                <select>
                  <option value="1">UnidadeMedida</option>
                </select>
            </p>
            <p>
                <select>
                  <option value="1">1 pessoa</option>
                </select>
            </p>
             <p>
                <select>
                  <option value="1">Origem</option>
                </select>
            </p>
            <p><button id="login">Editar</button></p>
            <p><button id="login">Criar</button></p>
            <p><button id="login">Eliminar</button></p>

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