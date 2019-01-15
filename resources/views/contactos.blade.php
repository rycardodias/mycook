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
    <section class="corpo" id="contactos">
        <div class="esquerda">
            <section class="texto" id="contactos">
                <h1>Contactos</h1>
                <p>Fale com a nossa equipa. Envie-nos uma mensagem.</p>
            </section>
            <section id="info">
                <p>Monserrate, Viana do Castelo</p>
                <p>Telefone: +351 xxx xxx xxx</p>
                <p>Email: xxxxxx@gmail.com</p>
            </section>
            <section id="formulario">
                @include('posts.mensagens.create')
            </section>
        </div>
        <div class="direita">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2979.207132998991!2d-8.849271684681469!3d41.69446397923731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDQxJzQwLjEiTiA4wrA1MCc0OS41Ilc!5e0!3m2!1spt-PT!2spt!4v1547510909246" 
            width="700" height="500" frameborder="0" style="border:0" ></iframe>
        </div>

    </section>
<footer id="rodape">
    @include('includes.footer')
</footer>    
</body>
</html>
