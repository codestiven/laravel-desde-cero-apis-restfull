<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;



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


// llamando controladores ***********************************************************


Route::get('/usuarios' ,[UserController::class, 'index2']);

Route::get('/libros' ,[BookController::class, 'index']);
