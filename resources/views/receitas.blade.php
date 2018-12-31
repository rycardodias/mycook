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
        <div class="filter">
        
        </div>
        <div class="receitas">
            
        </div>
    </section>
    
<footer id="rodape">
    @include('includes.footer')
</footer>    
</body>
</html>