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

     public function registro(Request $request){

       $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);


   }
}
