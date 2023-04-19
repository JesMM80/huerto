<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function store(){
        auth()->logout();

        return to_route('login')->with('message','Se cerró sesión en la aplicación!');
    }
}
