
<link rel="stylesheet" href="../css/menu.css">

<div class="nav">
        @include('includes.navbar')
</div>




<section class="corpo" id="receitasIndex">
    <div class="direita">
        <div class="topoReceitas">
            <h1>Lista de Receitas</h1>
            <input type="text"  id="myInput" onkeyup="myFunction()" placeholder="Procura a sua receita.." title="Procura a receita">
            <br><br>
            <a href="/receitas/create">Criar Receita</a>
        </div>
        <br>



        @if(count($receita)>0)
            <ul id="myUL">
            @foreach($receita as $receita)
                <div class="well">
                    <li><h3><a href="/receitas/{{$receita->id}}">{{$receita->nome}}</a></h3>
                    <small>{{$receita->resumo}}</small></li>
                    
                </div>
            @endforeach
            </ul>
        @else
            <p>Sem receitas encontradas</p>
        @endif
    </div>
    <div class="esquerda">
        <div class="filtroTipoConsumidor">
            <h3>Tipo Consumidor</h3>
            <div class="opcao">
                @foreach($tipos as $tipo)
                    <p><a href="/tipo/{{$tipo->id}}">{{$tipo->tipoConsumidor}}</a>
                @endforeach
            </div>
        </div>
    </div>
</section>


<script>
    function myFunction() {
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
</script>

<footer id="rodape">
    @include('includes.footer')
</footer>

