<?php

namespace App\View\Components;

use App\Models\Zona;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BtBorraHortalizaZona extends Component
{
    public $zona;
    public $id;

    public function __construct($zona,$id)
    {
        $this->zona = $zona;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.bt-borra-hortaliza-zona');
    }
}
