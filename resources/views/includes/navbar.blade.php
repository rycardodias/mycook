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
                <a id="pagAtual" href="receitas">Receitas</a> 
                <a href="ingredientes">Ingredientes</a>
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
        @if(Request::url() === $variavel . '/receitas')
            <a id="pagAtual" href="ingredientes">Ingredientes</a> 
        @else
            <a id="pagAtual" href="receitas">Receitas</a> 
        @endif
        <a href="myaccount">Minha Conta</a>
        @yield('botaoLogout')
    </div>
</div>
@endif



