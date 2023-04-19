<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create(){
        return view('register');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|min:3|max:10',
            'email' => 'required|unique:users,email|email|max:50',
            'password' => 'required|confirmed|min:2',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        //Iniciamos sesión en el programa
        auth()->attempt($request->only('email','password'));

        // Redireccionamos al usuario a la pantalla principal
        return to_route('principal')->with('message', 'Usuario registrado!');


    }
}
