<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SelectUser extends Component
{
    public $usuario;
    public $tipo;

    protected $listeners = ['cambiaSelect'];

    public function cambiaSelect(User $usuario){
        if ($usuario->tipo == 0) {
            $usuario->tipo = 1;
            $usuario->save();
        }else{
            $usuario->tipo = 0;
            $usuario->save();
        }
    }

    public function render()
    {
        return view('livewire.select-user');
    }
}
