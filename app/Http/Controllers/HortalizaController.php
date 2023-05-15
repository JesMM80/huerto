<?php

namespace App\Http\Controllers;

use App\Models\Hortaliza;
use Illuminate\Http\Request;

class HortalizaController extends Controller
{
    public function index(){

        $hortalizas = Hortaliza::orderBy('descripcion', 'asc')->paginate(15);

        return view('hortalizas.hortalizas',['hortalizas' => $hortalizas]);
    }

    public function destroy(Hortaliza $id){
        $id->delete();

        return to_route('hortalizas.index')->with('message','Hortaliza borrada!');
    }

    public function edit(Hortaliza $hortaliza){
        return view('hortalizas.editar',['hortaliza'=>$hortaliza]);
    }

    public function update(Request $request, Hortaliza $hortaliza){
        dd($hortaliza->id);
    }
}
