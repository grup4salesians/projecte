<html>
    <head>
        <meta charset="utf-8">
        {{ HTML::style('css/css.css'); }}
        <title>Login</title>
    </head>
    <body>
        
        <h1 style="text-align:center;">Backend DawSharing Grup 4</h1>
        <div id="backend">

            <div id="formulario">


                {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
                @if(Session::has('mensaje_error'))
                {{ Session::get('mensaje_error') }}
                @endif
                {{ Form::open(array('url' => '/login')) }}
                {{ Form::label('usuario', 'Nom',array('class'=>'login')) }}
                <br>
                {{ Form::text('username',Input::old('username'),array('class'=>'textbox')); }}
                <br>
                {{ Form::label('contrasenya', 'Contrasenya',array('class'=>'login'));}}
                <br>
                {{ Form::password('password',array('class'=>'textbox')); }}
                <br>
                {{ Form::label('lblRememberme', 'Recordar contraseña'); }}
                {{ Form::checkbox('rememberme', true) }}
                <br>
                {{ Form::submit('Entrar',array('class'=>'submit')) }}
                {{ Form::close() }}

            </div>
        </div>
        <div id="fondo"></div>
    </body>
</html>
