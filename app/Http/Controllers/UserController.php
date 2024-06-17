<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
   public function index2(){

            // Lógica para obtener la lista de usuarios desde el modelo (si es necesario)
            $user = User::all();

            return view('user.index' , ['users'=> $user]);

   }
}
