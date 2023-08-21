<?php

namespace App\Http\Livewire;

use App\Models\Hortaliza;
use Livewire\Component;

class HortalizasSembradas extends Component
{
    public $totalSembradas;
    public $hortaliza;
    public $variedad;
    public $familia;

    protected $listeners = ['buscarSembradas'=> 'buscar'];

    public function mount(){
        
        $this->totalSembradas = Hortaliza::where('sembrado','=',1)->get();
        // $this->totalSembradas = Hortaliza::when($this->hortaliza, function($query){
        //     $query->where('descripcion','LIKE','%'. $this->hortaliza. '%');
        // })->paginate(10);
    }

    public function buscar($hortaliza, $variedad, $familia){
        $this->hortaliza = $hortaliza;
        $this->variedad = $variedad;
        $this->familia = $familia;
    }

    public function render()
    {

        return view('livewire.hortalizas-sembradas',[
            'totalSembradas' => $this->totalSembradas
        ]);
    }
}
