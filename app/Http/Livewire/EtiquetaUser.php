<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Carbon;

class EtiquetaUser extends Component
{

    public $tipo;
    public $usuario;

    public function mount(){
        $fechaCarbon = Carbon::parse($this->usuario->created_at);
        $fechaFormateada = $fechaCarbon->format('d-m-Y');

        $this->tipo = $fechaFormateada;
    }

    public function render()
    {
        return view('livewire.etiqueta-user');
    }
}
