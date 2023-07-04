<?php

namespace App\Http\Livewire;

use App\Models\Riego;
use Livewire\Component;

class ListarRiegos extends Component
{
    public $riegos;

    protected $listeners = ['eliminaRiego'];
    
    public function eliminaRiego(Riego $riego){

        $riego->delete();
    }

    public function mount(){
        $this->riegos = Riego::all(['tipo','vecesDia','imagen','id']);
    }

    public function render()
    {
        return view('livewire.listar-riegos');
    }
}
