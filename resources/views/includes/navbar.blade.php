@php $variavel = 'http://127.0.0.1:8000'@endphp

@section('botaoLogout')
    @if(Auth::guest())
    @else
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Sair') }}</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
    @endif
@endsection

@if(Auth::guest())
    <div class="nav">
    <a  href="/" id="titulo">MyCook - Make life delicious</a>
    <div class="menu">
        <a id="pagAtual" href="/">Início</a> 
        <a href="sobre">Sobre</a>
        <a href="contactos">Contactos</a>
        @yield('botaoLogout')
    </div>
    </div>
@else
<div class="nav">
    <a  href="/" id="titulo">MyCook - Make life delicious</a>
    <div class="menu">
    @if (Auth::user()->tipoUtilizador=='3')
                <a href="/gerirusers">Utilizadores</a>
                <a href="/gerirtickets">Mensagens</a>
                |
            @endif
        <a  href="/">Início</a> 
        <a href="sobre">Sobre</a>
        <a href="contactos">Contactos</a>
        |
        <a  href="/receitas">Receitas</a>
        <a  href="/ingredientes">Ingredientes</a> 
        <a href="/myaccount/{{ Auth::user()->id }}">Minha Conta</a>
        @yield('botaoLogout')
    </div>
</div>
@endif

