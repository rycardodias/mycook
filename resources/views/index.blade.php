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
            <a id="pagAtual" href="/">Início</a> 
            <a href="sobre">Sobre</a>
            <a href="contactos">Contactos</a>
        </div>
    </div>
    <section class="corpo" id="index">
        <div class="esquerda">
            <div class="video">
                <video width="320" height="240" controls>
                    <source src="css/joke.mp4" type="video/mp4">
                </video>
            </div>
        </div>
        <div class="direita">
            <div class="login">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <p><input id="email" placeholder="Email" type="email"  name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </p>
                    <p>
                        <input id="password" placeholder="Password" type="password" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <button type="submit">{{ __('Login') }}</button>

                        @if (Route::has('password.request'))
                            <p><a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a></p>
                        @if (Route::has('register'))
                           <p> <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></p>
                        @endif
                        @endif
                </form>
            </div>
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