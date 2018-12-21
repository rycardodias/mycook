<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Laravel</title>
</head>
<body>
    <section class="corpo" id="index">
        <div class="createAccount">
            <h1>Criar Conta</h1>
            <p><input id="username" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus></p>
            <p><input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required></p>
            <p><input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required></p>
            <p><input id="password-confirm" type="password" class="form-control" name="password_confirmation" required></p>
            <p><button type="submit" class="btn btn-primary">{{ __('Register') }}</button></p>
            <p><a href="#" >Já tem uma conta registada?</a></p>
        </div>
    </section>  
</body>
</html>