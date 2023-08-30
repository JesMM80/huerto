<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        
        $usuarios = User::all();

        return view('usuarios.index',['usuarios' => $usuarios]);
    }

    public function index2(){

        return view('usuarios.index2');
    }

    public function listadmin(){

        $usuarios = User::where('tipo','=',1)
                    ->where('name','LIKE','%%')
                    ->get();

        return view('usuarios.listadmin',['usuarios' => $usuarios]);
    }

    public function destroy(User $id){
        $id->delete();

        $usuarios = User::all();

        return view('usuarios.index',['usuarios' => $usuarios]);
    }

    public function edit(User $id){
        return view('usuarios.edit',['usuarios' => $id]);
    }

    public function update(User $usuario, Request $request){

        $request->validate([
            'name' => 'required|min:2',
            'tipo' => 'required|numeric|between:0,1',
            'email' => 'required|email',
        ]);

        $usuario->name = $request->name;
        $usuario->tipo = $request->tipo;
        $usuario->email = $request->email;

        $usuario->save();

        return to_route('user.index')->with('message','Usuario modificado correctamente!');
    }

    public function create(){
        return view('usuarios.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:2',
            'tipo' => 'between:0,1',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tipo' => $request->tipo
        ]);

        return to_route('user.create')->with('message','Usuario guardado correctamente!');
    }
}
