<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FiltrarVacantes extends Component
{
    public $hortaliza;
    public $variedad;
    public $familia;

    public function buscarDatos(){

        $this->emit('buscarSembradas',$this->hortaliza, $this->variedad, $this->familia);
    }

    public function render()
    {
        return view('livewire.filtrar-vacantes');
    }
}
