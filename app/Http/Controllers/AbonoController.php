<?php

namespace App\Http\Controllers;

use App\Models\Abono;
use App\Models\AbonoHortaliza;
use App\Models\Hortaliza;
use Illuminate\Http\Request;

class AbonoController extends Controller
{
    public function index(){
        $abonos = Abono::all('id','nombre');
        return view('abonos.index',['abonos' => $abonos]);
    }

    public function create(){
        return view('abonos.create');
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required|min:2'
        ]);

        Abono::create([
            'nombre' => $request->nombre,
        ]);

        return to_route('abonos.index')->with('message','Abono guardado!');
    }

    public function edit(Abono $id){

        // $abono = Abono::where('id',$id)->first();

        return view('abonos.edit',['abono' => $id]);
    }

    public function update(Request $request, Abono $abono){

        $request->validate([
            'nombre' => 'required|min:2',
        ]);

        $abono->nombre = $request->nombre;
        $abono->save();

        return to_route('abonos.index')->with('message','Abono modificado!');
    }

    public function destroy(Abono $id){
        $id->delete();

        return to_route('abonos.index')->with('message','Abono eliminado!');
    }

    public function asociar(){

        $hortalizas = Hortaliza::select('id','descripcion')->orderBy('descripcion')->get();
        $abonos = Abono::select('id','nombre')->orderBy('nombre')->get();

        return view('abonos.asociar',[
            'hortalizas' => $hortalizas,
            'abonos' => $abonos,
        ]);
    }

    public function storeAsociacion(Request $request){

        AbonoHortaliza::create([
            'abono_id' => $request->nombre,
            'hortaliza_id' => $request->hortaliza,
        ]);

        return to_route('abonos.listaAsociados')->with('message','Asociación correcta!');
    }

    public function listaAsociados(){
        $asociados = AbonoHortaliza::all();

        return view('abonos.listadoAsociados',['asociados' => $asociados]);
    }

    public function destroyAsociado(AbonoHortaliza $id){
        $id->delete();

        return to_route('abonos.listaAsociados')->with('message','Asociación eliminada!');
    }
}
