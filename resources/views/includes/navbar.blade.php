@php $variavel = 'http://127.0.0.1:8000'@endphp

@section('botaoLogout')
    @if(Auth::guest())
    @else
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Sair') }}</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
    @endif
@endsection

<!-- PAGINAS INICIAIS -->
@if(Request::url() === $variavel || Request::url() === $variavel . '/contactos' || Request::url() === $variavel . '/sobre')
    @if(Auth::guest())
        <div class="nav">
            <a  href="/" id="titulo">MyCook - Make life delicious</a>
            <div class="menu">
                @if(Request::url() === $variavel)
                    <a id="pagAtual" href="/">Início</a> 
                    <a href="sobre">Sobre</a>
                    <a href="contactos">Contactos</a>
                @elseif(Request::url() ===  $variavel . '/contactos') 
                    <a href="/">Início</a> 
                    <a href="sobre">Sobre</a>
                    <a id="pagAtual" href="contactos">Contactos</a>
                @else(Request::url() ===  $variavel . '/sobre') 
                    <a href="/">Início</a> 
                    <a id="pagAtual" href="sobre">Sobre</a>
                    <a  href="contactos">Contactos</a>
                @endif
                @yield('botaoLogout')
            </div>
        </div>
    @else
    <div class="nav">
            <a  href="/" id="titulo">MyCook - Make life delicious</a>
            <div class="menu">
            @if(Request::url() === $variavel)
                    <a id="pagAtual" href="/">Início</a> 
                    <a href="sobre">Sobre</a>
                    <a href="contactos">Contactos</a>
                    |
                    <a  href="receitas">Receitas</a>
                    <a  href="ingredientes">Ingredientes</a> 
                    <a href="myaccount/{{ Auth::user()->id }}">Minha Conta</a>

                @elseif(Request::url() ===  $variavel . '/contactos') 
                    <a href="/">Início</a> 
                    <a href="sobre">Sobre</a>
                    <a id="pagAtual" href="contactos">Contactos</a>
                    |
                    <a  href="receitas">Receitas</a>
                    <a  href="ingredientes">Ingredientes</a> 
                    <a href="myaccount/{{ Auth::user()->id }}">Minha Conta</a>
                @else(Request::url() ===  $variavel . '/sobre') 
                    <a href="/">Início</a> 
                    <a id="pagAtual" href="sobre">Sobre</a>
                    <a  href="contactos">Contactos</a>
                    |
                    <a  href="receitas">Receitas</a>
                    <a  href="ingredientes">Ingredientes</a> 
                    <a href="myaccount/{{ Auth::user()->id }}">Minha Conta</a>
                @endif
                @yield('botaoLogout')
            </div>
        </div>
    @endif
@endif

<!--               RECEITAS                -->
@if(Request::url() === $variavel . '/receitas' || Request::url() === $variavel . '/ingredientes')
<div class="nav">
    <a  href="/" id="titulo">MyCook - Make life delicious</a>
    <div class="menu">
        <a href="/">Início</a> 
        <a href="/sobre">Sobre</a>
        <a  href="/contactos">Contactos</a> |
        @if(Request::url() === $variavel . '/receitas')
            <a id="pagAtual" href="receitas">Receitas</a>
            <a href="ingredientes">Ingredientes</a>
            <a href="myaccount/{{ Auth::user()->id }}">Minha Conta</a>
        @elseif(Request::url() === $variavel . '/ingredientes')
            <a  href="receitas">Receitas</a>
            <a id="pagAtual" href="ingredientes">Ingredientes</a>
            <a href="myaccount/{{ Auth::user()->id }}">Minha Conta</a>
        @else
            <a id="pagAtual" href="">Minha Conta</a>
        @endif
        @yield('botaoLogout')
    </div>
</div>
@endif

@if(Auth::guest())
@else
@if(Request::url() === $variavel . '/myaccount/'.  Auth::user()->id)
<div class="nav">
    <a  href="/" id="titulo">MyCook - Make life delicious</a>
    <div class="menu">
    @if (Auth::user()->tipoUtilizador=='3')
        <a href="/gerirusers">Utilizadores</a> 
        <a href="/gerirtickets">Mensagens</a> 
        |
        @endif
        <a href="/">Início</a> 
        <a href="/sobre">Sobre</a>
        <a  href="/contactos">Contactos</a> |
        <a href="/receitas">Receitas</a>
        <a href="/ingredientes">Ingredientes</a>
        <a id="pagAtual" href="">Minha Conta</a>
        @yield('botaoLogout')
    </div>
</div>
@endif
@endif

@if(Request::url() === $variavel . '/tipo/1' ||
    Request::url() === $variavel . '/tipo/2' ||
    Request::url() === $variavel . '/tipo/3' ||
    Request::url() === $variavel . '/tipo/4' ||
    Request::url() === $variavel . '/tipo/5' ||
    Request::url() === $variavel . '/tipo/6')
<div class="nav">
    <a  href="/" id="titulo">MyCook - Make life delicious</a>
    <div class="menu">
        <a href="/">Início</a> 
        <a href="/sobre">Sobre</a>
        <a  href="/contactos">Contactos</a> |
            <a id="pagAtual" href="/receitas">Receitas</a>
            <a href="/ingredientes">Ingredientes</a>
            <a href="/myaccount/{{ Auth::user()->id }}">Minha Conta</a>
        
        @yield('botaoLogout')
    </div>
</div>
@endif

@if(Request::url() === $variavel . '/origem/1' ||
    Request::url() === $variavel . '/origem/2' ||
    Request::url() === $variavel . '/origem/3' ||
    Request::url() === $variavel . '/origem/4' ||
    Request::url() === $variavel . '/origem/5' ||
    Request::url() === $variavel . '/origem/6' ||
    Request::url() === $variavel . '/origem/7' ||
    Request::url() === $variavel . '/origem/8' ||
    Request::url() === $variavel . '/origem/9')
<div class="nav">
    <a  href="/" id="titulo">MyCook - Make life delicious</a>
    <div class="menu">
        <a href="/">Início</a> 
        <a href="/sobre">Sobre</a>
        <a  href="/contactos">Contactos</a> |
            <a  href="/receitas">Receitas</a>
            <a id="pagAtual" href="/ingredientes">Ingredientes</a>
            <a href="/myaccount/{{ Auth::user()->id }}">Minha Conta</a>
        
        @yield('botaoLogout')
    </div>
</div>
@endif

@if(Request::url() === $variavel . '/receitas/create' || Request::url() === $variavel . '/ingredientes/create')
<div class="nav">
    <a  href="/" id="titulo">MyCook - Make life delicious</a>
    <div class="menu">
        <a href="/">Início</a> 
        <a href="/sobre">Sobre</a>
        <a  href="/contactos">Contactos</a>
        @if(Request::url() === $variavel . '/receitas/create')
            <a  id="pagAtual" href="/receitas">Receitas</a>
            <a href="/ingredientes">Ingredientes</a>
        @else
            <a  href="/receitas">Receitas</a>
            <a id="pagAtual" href="/ingredientes">Ingredientes</a>
        @endif
        <a href="/myaccount/{{ Auth::user()->id }}">Minha Conta</a>
        
        @yield('botaoLogout')
    </div>
</div>
@endif

