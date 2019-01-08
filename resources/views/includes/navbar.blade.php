@php
$variavel = 'http://127.0.0.1:8000'
@endphp

@section('botaoLogout')
@if(Auth::guest())
        @else
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Sair') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
        @endif
@endsection

<!--               CONDIÇOES DE MENU                -->

@if(Request::url() === $variavel . '/receitas')
<div class="nav">
    <a  href="/" id="titulo">MyCook - Make life delicious</a>
    <!--<label for="toggle">&#9776;</label>
    <input type="checkbox" id="toggle"/> -->
    <div class="menu">
        <a id="pagAtual" href="ingredientes">Ingredientes</a> 
        <a href="myaccount">Minha Conta</a>
        @yield('botaoLogout')
    </div>
</div>
@endif
@if(Request::url() === $variavel . '/ingredientes')
<div class="nav">
    <a  href="/" id="titulo">MyCook - Make life delicious</a>
    <div class="menu">
        <a id="pagAtual" href="receitas">Receitas</a> 
        <a href="myaccount">Minha Conta</a>
        @yield('botaoLogout')
    </div>
</div>
@endif



@if(Request::url() === $variavel )
    @if(Auth::guest())
        <div class="nav">
            <a  href="/" id="titulo">MyCook - Make life delicious</a>
            <div class="menu">
                <a id="pagAtual" href="/">Início</a> 
                <a href="Sobre">Sobre</a>
                <a href="Contactos">Contactos</a>
                @yield('botaoLogout')
            </div>
        </div>
    @else
    <div class="nav">
            <a  href="/" id="titulo">MyCook - Make life delicious</a>
            <div class="menu">
                <a id="pagAtual" href="receitas">Receitas</a> 
                <a href="ingredientes">Ingredientes</a>
                @yield('botaoLogout')
            </div>
        </div>
    @endif
@endif
@if(Request::url() === $variavel . '/ola' )
<div class="nav">
    <a  href="/" id="titulo">Versão de TESTES</a>

</div>
@endif

