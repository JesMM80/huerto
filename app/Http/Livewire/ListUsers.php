<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ListUsers extends Component
{
    
    protected $listeners = ['borrarUsuario'];

    public function borrarUsuario(User $usuario)
    {
        $usuario->delete();
        return to_route('user.index2');
    }
    
    public function render(){

        $usuarios = User::all();

        return view('livewire.list-users',['usuarios' => $usuarios]);
    }

}
