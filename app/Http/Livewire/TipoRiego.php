<?php

namespace App\Http\Livewire;

use App\Models\Riego;
use Livewire\Component;
use Livewire\WithFileUploads;

class TipoRiego extends Component
{

    public $tipo;
    public $vecesDia;
    public $imagen;


    use WithFileUploads;

    protected $rules = [
        'tipo' => 'required|string',
        'vecesDia' => 'required|string',
        'imagen' => 'image|max:1024|nullable'
    ];

    public function guardaRiego(){
        $this->validate();
        
        if($this->imagen != ''){
            $imagen = $this->imagen->store('public/images');
            $nombreImagen = str_replace('public/images/','',$imagen);

        }else{
            $nombreImagen = '';
        }
        

        Riego::create([
            'tipo' => $this->tipo,
            'vecesDia' => $this->vecesDia,
            'imagen' => $nombreImagen,
        ]);

        session()->flash('message','Tipo de riego guardado!');
    }

    public function render()
    {
        return view('livewire.tipo-riego');
    }
}
