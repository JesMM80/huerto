<?php

namespace App\Http\Controllers;

use App\Models\Hortaliza;
use App\Models\Siembra;
use Illuminate\Http\Request;

class SiembraController extends Controller
{
    public function create(){

        $hortalizas = Hortaliza::all('id', 'descripcion');

        return view('siembra.create',['hortalizas' => $hortalizas]);
    }

    public function store(Request $request){

        $hortaliza = Hortaliza::where('descripcion',$request->descripcion)->get();
        $request->request->add(['descripcion' => $hortaliza[0]['id']]);

        $request->validate([
            'cantidad' => 'integer|required',
            'fecha' => 'date',
            'descripcion' => 'unique:siembras,hortaliza_id',
        ]);

        Siembra::create([
            'fecha' => $request->fecha,
            'cantidad' => $request->cantidad,
            'hortaliza_id' => $hortaliza[0]['id'],
        ]);

        return to_route('siembra.create')->with('message','Hortaliza sembrada!');
    }
}
