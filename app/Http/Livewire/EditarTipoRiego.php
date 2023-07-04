<?php

namespace App\Http\Livewire;

use App\Models\Riego;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditarTipoRiego extends Component
{

    public $riego_id;
    public $tipo;
    public $vecesDia;
    public $imagen;
    public $imagen_nueva;
    use WithFileUploads;

    protected $rules = [
        'tipo' => 'required|string',
        'vecesDia' => 'required|string',
        'imagen_nueva' => 'image|max:1024|nullable'
    ];

    public function mount(Riego $id){
        $this->riego_id = $id->id;
        $this->tipo = $id->tipo;
        $this->vecesDia = $id->vecesDia;
        $this->imagen = $id->imagen;
    }

    public function editarRiego(){
        
        $datos = $this->validate();
        
        $riego = Riego::find($this->riego_id);

        if($this->imagen_nueva){
            $imagen = $this->imagen_nueva->store('public/images/');
            $datos['imagen'] = str_replace('public/images/','',$imagen) ;

        }else{
            $nombreImagen = '';
        }

        $riego->tipo = $datos['tipo'];
        $riego->vecesDia = $datos['vecesDia'];
        $riego->imagen = $datos['imagen'] ?? $riego->imagen;
        $riego->save();

        session()->flash('message','Riego editado!');

    }

    public function render()
    {
        return view('livewire.editar-tipo-riego');
    }
}
