<?php
Route::get('/', function () {
    return view('home');
   //return "ambientes";
});

Route::post('/form','ambientesController@show');

//controladores          //nombredelcontrolador@nombredelprocedim
Route::get('/controller','ambientesController@index');