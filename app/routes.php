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


Route::get('/',function(){
    return View::make('hello');
    
});

Route::get('marca',array('uses'=>'MarcaController@mostrarMarcas'));


Route::group(array('prefix'=>'api/v1'),function(){
//    --------------------- SELECCT ALL ----------------------
    Route::resource('marca','UrlController@selectallmarca');
     Route::resource('usuaris','UrlController@selectallusuaris');
     Route::resource('correu','UrlController@selectallcorreu');
     Route::resource('vehicles','UrlController@selectallvehicles');
     Route::resource('vehicles_usuaris','UrlController@selectallvehiclesusuaris');
     Route::resource('caracteristiques','UrlController@selectallcaracteristiques');
     Route::resource('passatger','UrlController@selectallpassatger');
     Route::resource('ruta','UrlController@selectallruta');
     Route::resource('model','UrlController@selectallmodel');
     Route::resource('periodicitat','UrlController@selectallperiodicitat');
     Route::resource('viatge','UrlController@selectallviatge');
//    --------------------- IDS ----------------------
     
        Route::resource('marcaid','UrlController@selectmarcaid');
        Route::resource('usuarisid','UrlController@selectusuarisid');


    
});

Route::get('marcawhere/{nombrecampo}/{model}', function($nombrecampo,$model)
{
        return Marca::where($nombrecampo, '=', $model)
        ->get();
});



