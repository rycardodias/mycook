<link rel="stylesheet" href="../css/menu.css">
   
    <h1>Enviar Mensagem</h1>
    {!! Form::open(['action' => 'MensagensController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            <p>{{Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Nome'])}}
        </div>
        <div class="form-group">
            <p>{{Form::text('email', '', [ 'class' => 'form-control', 'placeholder' => 'Email'])}}
        </div>
        <div class="form-group">
            <p>{{Form::text('assunto', '', ['class' => 'form-control', 'placeholder' => 'Assunto'])}}
        </div>
        <div class="form-group">
            <p>{{Form::text('mensagem', '', ['class' => 'form-control', 'placeholder' => 'Mensagem'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}
