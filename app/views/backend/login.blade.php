<html>
    <head>
        <meta charset="utf-8">
        {{ HTML::style('css.css'); }}
        <title>Login</title>
    </head>
    <body bgcolor="#E6E6FA">
        <style>
            #backend{
    width: 320px;
    height: 270px;
    padding: 30px;
    border-radius: 10px;
    background-color:rgba(192, 185, 185, 0.1);
    margin:auto;
    margin-top:50px;
}
#formulario{
    height: 250px;
    padding: 10px;
    border-radius:10px;
    background-color:rgba(192, 185, 185, 0.9);
    margin: auto;
}
.login{
    font-size: 30px;
    margin-top: 20px;
}
.textbox{
    width:100%;
    height:30px;
}
        </style>
        <h1 style="text-align:center;">Backend DawSharing</h1>
        <div id="backend">
            
            <div id="formulario">
                
            
               {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
                @if(Session::has('mensaje_error'))
                {{ Session::get('mensaje_error') }}
                @endif
                {{ Form::open(array('url' => '/login')) }}
                <span class="login">{{ Form::label('usuario', 'Nom') }}</span> 
                <br>
                <span class="textbox"> {{ Form::text('username', Input::old('username')); }}</span>
                <br>
                <span class="login"> {{ Form::label('contrasenya', 'Contrasenya') }}</span> 
                <br>
              <span class="textbox">  {{ Form::password('password'); }}</span>
                <br>
                {{ Form::label('lblRememberme', 'Recordar contraseña') }}
                {{ Form::checkbox('rememberme', true) }}
                <br>
                {{ Form::submit('Enviar') }}
                {{ Form::close() }}
        
        </div>
         </div>
    </body>
</html>
