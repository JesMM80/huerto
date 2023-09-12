<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BuscaHortaliza extends Component
{
    public $descripcion;
    public $variedad;
    public $familia;

    protected $rules = [
        'descripcion' => 'min:2|nullable',
        'variedad' => 'nullable',
        'familia' => 'nullable',
    ];

    public function guardar(){
        $this->validate();
    }

    public function leerDatos(){

        $this->emit('terminosBusqueda',$this->descripcion,$this->variedad,$this->familia);
    }

    public function render()
    {
        return view('livewire.busca-hortaliza');
    }
}
