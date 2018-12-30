<!DOCTYPE html>
<html lang="{{ config('app.locale')}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <title>{{config('app.name','MyCook')}}</title>
</head>
<body>
    <div class="container">
        @include('includes.messages')
        @yield('content')
    </div>
</body>
</html>
