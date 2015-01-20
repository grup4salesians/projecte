<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('insertmarca/{marca}',function($marca){

        $con = mysqli_connect('JONA-PC','jona','1234','dawsharing');
        mysqli_query($con,"insert into marca (marca) values ('$marca')");
        return View::make('/backend/prueba');
    
 
});

Route::get('deletemarca/{marca}',function($marca){

       
        $con = mysqli_connect('JONA-PC','jona','1234','dawsharing');
        mysqli_query($con,"DELETE FROM marca where marca = '$marca'");
        return View::make('/backend/prueba');
    
 
});

// Nos mostrará el formulario de login.
Route::get('administracio',function(){
    return View::make('/backend/login');
});
