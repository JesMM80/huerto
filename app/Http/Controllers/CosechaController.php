<?php

namespace App\Http\Controllers;

use App\Models\Cosecha;
use App\Models\Hortaliza;
use App\Models\Zona;
use Illuminate\Http\Request;

class CosechaController extends Controller
{
    public function index(){
      
        return view('cosecha.index');
    }

    public function create(){

        $hortalizas = Hortaliza::orderBy('descripcion')->get(['id','descripcion']);
        $zonas = Zona::orderBy('lugar')->get(['id','lugar']);

        return view('cosecha.create',['zonas' => $zonas,'hortalizas' => $hortalizas]);
    }

    public function store(Request $request){
        $request->validate([
            'kilos' => 'required|numeric'
        ]);

        Cosecha::create([
            'hortaliza_id' => $request->hortaliza,
            'kilos' => $request->kilos,
            'zona_id' => $request->zona,
            'user_id' => auth()->user()->id
        ]);

        return back()->with(session()->flash('message','Cosecha guardada correctamente!'));
    }

    public function edit(Cosecha $id){

        $zonas = Zona::all('id','lugar');
        $hortalizas = Hortaliza::all('id','descripcion');

        return view('cosecha.edit',[
            'cosechas' => $id,
            'zonas' => $zonas,
            'hortalizas' => $hortalizas,
            ]
        );
    }

    public function editLw(Cosecha $cosecha){
        return view('cosecha.editCosecha',['cosecha' => $cosecha]);
    }

    public function update(Request $request, Cosecha $cosechas){
        $request->validate([
            'kilos' => 'required|numeric'
        ]);

        $cosechas->kilos = $request->kilos;
        $cosechas->hortaliza_id = $request->hortaliza;
        $cosechas->zona_id = $request->zona;
        $cosechas->save();

        session()->flash('message','Cosecha actualizada!');
        return back();
    }

}
