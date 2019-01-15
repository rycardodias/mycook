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
        @include('includes.navbar')
    </div>
    <section class="corpo" id="index">
        <div class="esquerda">
            <div class="logo">
                <img src="img/logo.png">
            </div>
        </div>
        <div class="direita">
            @if(Auth::guest())
            <div class="login" >
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <p>Email:
                    <p><input id="email" placeholder="Email" type="email"  name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </p>
                    <p>Password:
                    <p><input id="password" placeholder="Password" type="password" name="password" required>
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
                            
                        @if (Route::has('register'))
                           <p> <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></p>
                        @endif
                        @endif
                </form>
        <!-- INTRODUZIR CONDIÇOES -->
                @else
                    <div class="loginLigado">
                        <h1> Bem Vindo ao MyCook </h1>
                        <p>A equipa do MyCook deseja-lhe uma excelente experiencia no uso da aplicação! Divirta-se a cozinhar!
                    </div>
                @endif
            </div>
        </div>
    </section>

<footer id="rodape">
    @include('includes.footer')
</footer>    
</body>
</html>