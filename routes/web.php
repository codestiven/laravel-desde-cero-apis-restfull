<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', function () {
    return view('nuevavista');
});


Route::get('/saludo/{name}', function ($name) {
    return "Hola , $name";
});

//Route::view('/', 'welcome' , ['mensaje' => 'saludo']);
