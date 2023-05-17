<?php

namespace App\Http\Controllers;

use App\Models\Family;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        $familias = Family::orderBy('nombre', 'asc')->get();

        return view('familias.familias',['familias' => $familias]);
    }

    public function create(){
        return view('familias.create');
    }

    public function store(Request $request){

        $request->validate([
            'nombre' => 'required|min:2|unique:families,nombre',
            'descripcion' => 'required|min:2',
            'necesidades' => 'required|min:2'
        ]);

        Family::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'necesidades' => $request->necesidades
        ]);

        return to_route('familias.index')->with('message','La familia se guardó correctamente!');
    }

    public function destroy(Family $id){

        $id->delete();

        return to_route('familias.index')->with('message','Familia borrada!');
    }

    public function edit (Family $familia){

        return view('familias.editar',['familia' => $familia]);
    }

    public function update(Request $request, Family $familia){
        
        $request->validate([
            'nombre' => 'required|min:2|unique:families,nombre',
            'descripcion' => 'required|min:2',
            'necesidades' => 'required|min:2'
        ]);

        //Encontrar la familia a editar
        $familia = Family::find($familia->id);

        // //Asignar los valores
        $familia->nombre = $request->nombre;
        $familia->descripcion = $request->descripcion;
        $familia->necesidades = $request->necesidades;
        // En esta comprobación a $familia->imagen le asignamos el valor de $datos['imagen'] si hubiera una imagen nueva
        // o si no hubiera imagen nueva le asignamos el valor que ya tenía $familia->imagen;
        // $familia->imagen = $datos['imagen'] ?? $familia->imagen;

        //Guardar la familia
        $familia->save();

        return to_route('familias.index')->with('message','Familia actualizada!');

    }
}
