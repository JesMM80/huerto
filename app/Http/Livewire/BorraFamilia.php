<?php

namespace App\Http\Livewire;

use App\Models\Family;
use Livewire\Component;

class BorraFamilia extends Component
{
    public $familia;

    protected $listeners = ['borraFamilia'];
    
    public function borraFamilia(Family $familiaId)
    {
        $familiaId->delete();
        return to_route('familias.index');
    }
    
    public function render()
    {
        return view('livewire.borra-familia');
    }
}
