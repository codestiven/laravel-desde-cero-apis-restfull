<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', function () {
    return view('nuevavista');
});


Route::get('/saludo/{name}', function ($name) {
    return "Hola , $name";
});


Route::get('/usuarios' ,[UserController::class, 'index2']);

//Route::view('/', 'welcome' , ['mensaje' => 'saludo']);
