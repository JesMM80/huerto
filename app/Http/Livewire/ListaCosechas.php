<?php

namespace App\Http\Livewire;

use App\Models\Cosecha;
use Livewire\Component;

class ListaCosechas extends Component
{

    protected $listeners = ['borrarCosecha'];

    public function borrarCosecha(Cosecha $cosecha){

        $cosecha->delete();
    }

    public function render()
    {
        $cosechas = Cosecha::join('hortalizas', 'cosechas.hortaliza_id', '=', 'hortalizas.id')
                    ->select('cosechas.*')
                    ->orderBy('hortalizas.descripcion')
                    ->get();
        // $cosechas = Cosecha::all();

        return view('livewire.lista-cosechas',['cosechas' => $cosechas]);
    }
}
