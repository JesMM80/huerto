<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Hortaliza;

class ListaHortalizas extends Component
{
    public $descripcion;
    public $variedad;
    public $familia;

    protected $listeners = ['terminosBusqueda' => 'buscar'];

    public function buscar($descripcion, $variedad, $familia){

        $this->descripcion = $descripcion;
        $this->variedad = $variedad;
        $this->familia = $familia;
    }

    public function render()
    {
        // $hortalizas = Hortaliza::orderBy('descripcion', 'asc')->paginate(15);
        $hortalizas = Hortaliza::when($this->descripcion, function($query){
            $query->where('descripcion','LIKE','%'.$this->descripcion.'%')
                ->orderBy('descripcion','desc');
        })
        ->when($this->variedad, function($query){
            $query->where('variedad','LIKE','%'.$this->variedad.'%');
        })
        ->when($this->familia, function($query){
            $query->where('family_id','LIKE','%'.$this->familia.'%');

            // $query->where('family_id', 'LIKE', '%' . $this->familia . '%')
            // ->leftJoin('families', 'hortalizas.family_id', '=', 'families.id')
            // ->select('hortalizas.*', 'families.nombre');
        })
        ->paginate(10);
        
        return view('livewire.lista-hortalizas',['hortalizas' => $hortalizas]);
    }
}
