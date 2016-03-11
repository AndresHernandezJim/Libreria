<?php
Route::get('/', function () {
    return view('website/Index');
  
});
Route::get('/tienda',function(){

});

//Route::post('/form','ambientesController@store');

//controladores          //nombredelcontrolador@nombredelprocedim
Route::get('/controller','ambientesController@index');