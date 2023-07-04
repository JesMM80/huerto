<?php

namespace App\Http\Controllers;

use App\Models\Hortaliza;
use App\Models\HortalizaZona;
use App\Models\Zona;
use Illuminate\Http\Request;

class ZonaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){

        $zonas = HortalizaZona::all();

        return view('zonas.index',['zonas' => $zonas]);
    }

    public function create(){

        $hortalizas = Hortaliza::all('id','descripcion');
        $zonas = Zona::all('id','lugar');

        return view('zonas.create',['hortalizas' => $hortalizas,'zonas'=>$zonas]);
    }
    
    public function store(Request $request){

        HortalizaZona::create([
            'hortaliza_id' => $request->hortaliza,
            'zona_id' => $request->zona,
        ]);

        return to_route('zonas.index')->with('message','La zona se guardó correctamente!');
    }

    public function destroy(HortalizaZona $id){
        $id->delete();

        return to_route('zonas.index')->with('message','La zona se eliminó correctamente!');
    }
}
