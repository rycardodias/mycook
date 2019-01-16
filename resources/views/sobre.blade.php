<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/menu.css">

        <title>MyCook</title>
</head>
<body>
    <div class="nav">
        @include('includes.navbar')
    </div>
    <section class="corpo" id="sobre">
        <section class="texto" id="sobre">
            <div class="esquerda">
                <h1>Sobre Nós</h1>
                <p>Lorem ipsum pretium erat aptent imperdiet aenean dapibus tortor auctor lorem pellentesque, bibendum tristique aenean fermentum massa feugiat sem magna justo. curae cursus tortor volutpat faucibus facilisis inceptos lorem, integer donec hac commodo sodales ad congue, nulla quisque potenti cubilia lorem nisi. eget vel odio dolor aliquam per nulla vitae class tempor nulla, proin gravida ornare sollicitudin consectetur inceptos vehicula sociosqu semper id mollis, nec 
                suspendisse nisl netus condimentum aliquam turpis id adipiscing. bibendum neque dictumst sed tristique praesent faucibus velit faucibus cubilia tristique et, per condimentum orci praesent mattis felis non habitant vestibulum. 
            </div>  
            <div class="direita">
            <img src="img/foto2.jpg">
            </div>  
            </section>
    </section>
    
<footer id="rodape">
    @include('includes.footer')
</footer>    
</body>
</html>