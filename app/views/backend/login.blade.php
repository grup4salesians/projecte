<html>
    <head>
        <meta charset="utf-8">
        <link href="../css.css" rel="stylesheet" type="text/css"/>
        <title>Login</title>
    </head>
<!--    <body bgcolor="#E6E6FA">-->
        <style>
            #backend{
                width: 50%;
                max-width: 500px;
                min-width: 320px;
                height: 250px;
                padding: 30px;
                border-radius: 10px;
                border: 2px solid rgba(192, 185, 185, 0.9);
                background-color:rgba(192, 185, 185, 0.1);
                    background-image: url('/images/backgroundform.jpg');
                margin:auto;
                margin-top:50px;
                box-shadow: 10px 10px 5px #888888;
            }
            #formulario{
                height: 250px;
                padding: 10px;
                border-radius:10px;
                text-align:center;
                margin: auto;
                background-size:100%;
            }
            .login{ 
                font-size: 30px;
                margin-top: 20px;   
            }
            .textbox{
                width:100%;
                height:30px;
                margin-top:10px;
            }
            .submit{
                width:100%;
                height:50px;
                margin-top:20px;
                font-size: 20px;
                border: 1px solid rgba(192, 185, 185, 0.9);
                box-shadow: 5px 5px 5px #888888;          
            }
            .submit:hover{
                 background: 1px rgba(192, 185, 185, 0.5);
            }
            .submit:active{
                box-shadow: 2px 2px 2px #888888;
                position:relative;
                top:3px;
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
    </body>
</html>
