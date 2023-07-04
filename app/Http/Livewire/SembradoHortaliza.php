<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SembradoHortaliza extends Component
{
    public $hortaliza;
    public $hortaliza_sembrada;

    public function mount(){
        if($this->hortaliza->sembrado == 0){
            $this->hortaliza_sembrada = 0;
        }else{
            $this->hortaliza_sembrada = 1;
        }
        
    }

    public function sembrar(){
        if($this->hortaliza->sembrado == 0){

            $this->hortaliza->sembrado = 1;
            $this->hortaliza->save();

            $this->hortaliza_sembrada = 1;

        }else{
            $this->hortaliza->sembrado = 0;
            $this->hortaliza->save();

            $this->hortaliza_sembrada = 0;
        }
        
    }

    public function render()
    {
        return view('livewire.sembrado-hortaliza');
    }
}
