<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class BtUserSembrar extends Component
{
    public $usuario;

    public function actSiembra(){

        if($this->usuario->sembrar == 0){
            $sembrar = 1;
        }else{
            $sembrar = 0;
        }
        
        $this->usuario->sembrar = $sembrar;
        $this->usuario->save();
    }

    public function render()
    {
        return view('livewire.bt-user-sembrar');
    }
}
