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
          <a id="pagAtual" href="index.html">Minha Conta</a> 
           <a href="sobre.html">Sair</a>
        </div>
    </div>
    <section class="corpo" id="editarReceita">
        <div class="editarReceita">
            <p><input id="nome" maxlength="15" placeholder="Nome" required></p>
            <p><input id="descricao" maxlength="30" placeholder="Descrição" required></p>
            <p><input id="passos" maxlength="15" placeholder="Lista de Passos" required></p>
            <p>
                <select>
                  <option value="1">1 pessoa</option>
                  <option value="2">2 pessoas</option>
                  <option value="3">3 pessoas</option>
                  <option value="4">4 pessoas</option>
                </select>
            </p>
            <p><button id="login">Registar</button></p>
        </div>
    </section>
    
<footer id="rodape">
    @include('includes.footer')
</footer>    
</body>
</html>