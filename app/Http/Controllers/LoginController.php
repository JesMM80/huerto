<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!auth()->attempt($request->only('email','password'))){

            return back()->with('message','Credenciales incorrectas!');
        }
        return to_route('login')->with('message', 'Bienvenido!');
    }
}
