<?php

namespace App\Http\Livewire;

use App\Models\Cosecha;
use App\Models\Zona;
use Livewire\Component;
use App\Models\Hortaliza;

class EditCosecha extends Component
{
    public $cosecha;
    public $hortaliza;
    public $zona;
    public $usuario;
    public $kilos;

    protected $rules = [
        'kilos' => 'required|numeric'
    ];

    public function mount(Cosecha $cosecha){
        $this->hortaliza = $cosecha->hortaliza_id;
        $this->kilos = $cosecha->kilos;
        $this->usuario = $cosecha->user->name;
        $this->zona = $cosecha->zona_id;
    }

    public function edicionCosecha(){
        $this->validate();

        $cosechanew = $this->cosecha;
        $cosechanew->kilos = $this->kilos;
        $cosechanew->hortaliza_id = $this->hortaliza;
        $cosechanew->zona_id = $this->zona;
        $cosechanew->save();

        return to_route('cosecha.index')->with('message','Cosecha guardada correctamente!');
    }

    public function render()
    {
        $zonas = Zona::all('id','lugar');
        $hortalizas = Hortaliza::all('id','descripcion');
        
        return view('livewire.edit-cosecha',[
            'zonas' => $zonas,
            'hortalizas' => $hortalizas,
            'cosecha' => $this->cosecha,
        ]);
    }
}
