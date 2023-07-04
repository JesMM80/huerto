<?php

namespace App\Http\Livewire;

use App\Models\Family;
use Livewire\Component;

class FamiliaSembrada extends Component
{
    public $familia;
    public $sembrada;

    public function mount(){

        // $this->sembrada = Family::where('created_at',$this->familia->nombre)->orWhereNull('familia')->first();
        // dd($this->sembrada);
    }

    public function fam_sembrada(){

    }

    public function render()
    {
        return view('livewire.familia-sembrada');
    }
}
