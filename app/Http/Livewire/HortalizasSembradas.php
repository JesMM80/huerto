<?php

namespace App\Http\Livewire;

use App\Models\Hortaliza;
use Livewire\Component;

class HortalizasSembradas extends Component
{
    public $totalSembradas;

    public function mount(){
        $this->totalSembradas = Hortaliza::where('sembrado','=',1)->get();
    }

    public function render()
    {
        return view('livewire.hortalizas-sembradas');
    }
}
