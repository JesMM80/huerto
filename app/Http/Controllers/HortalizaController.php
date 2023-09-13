<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\Hortaliza;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class HortalizaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('hortalizas.hortalizas');
    }

    public function create(){

        $familias = Family::all();

        return view('hortalizas.create',['familias'=>$familias]);
    }

    public function destroy(Hortaliza $id){

        //Eliminamos la imagen asociada a la hortaliza
        if ($id->imagen != '' && $id->imagen != Str::startsWith($id->imagen, 'http')) {
            $imagenPath = public_path('uploads/' . $id->imagen);
            unlink($imagenPath);
        }

        $id->delete();

        return to_route('hortalizas.index')->with('message','Hortaliza borrada!');
    }

    public function edit(Hortaliza $hortaliza){
        $familias = Family::all();
        return view('hortalizas.editar',['hortaliza'=>$hortaliza,'familias' => $familias]);
    }

    public function store(Request $request){

        $request->validate([
            'descripcion' => 'required|max:100|unique:hortalizas,descripcion',
            'imagen' => 'image|nullable',
            'variedad' => 'required',
            'epoca_siembra' => 'required|max:50',
            'tiempo_germ' => 'required|max:50',
            'riego' => 'required|max:100',
            'temperatura_hsol' => 'required|max:100',
            'separacion' => 'required|max:100',
            'abonos' => 'required|max:100',
            'tratamiento' => 'required|max:100',
            'asociaciones' => 'required|max:100',
        ]);

        if($request->hasFile('imagen')){
            $imagen = $request->file('imagen');
            $nombreImagen = Str::uuid() . "." . $imagen->extension(); //Esta línea (uuid) genera un id único para cada imagen.
            
            $imagenServidor = Image::make($imagen); //Este es el método que permite crear una imagen usando la librería intervention.
            $imagenServidor->fit(1000,1000); //Estos son métodos propios de la libreria interventionImage para tratar las imágenes.
            //Apuntamos a la carpeta deseada.
            $imagenPath=public_path('uploads/') . $nombreImagen; 
            //Movemos la imagen al servidor en la ruta especificada.
            $imagenServidor->save($imagenPath);

        }else{
            $nombreImagen = '';
        }
        $family_id = Family::where('nombre',$request->familia)->first();

        Hortaliza::create([
            'descripcion' => $request->descripcion,
            'imagen' => $nombreImagen,
            'variedad' => $request->variedad,
            'epoca_siembra' => $request->epoca_siembra,
            'tiempo_germ' => $request->tiempo_germ,
            'riego' => $request->riego,
            'sembrado' => 0,
            'family_id' => $family_id->id,
            'temperatura_hsol' => $request->temperatura_hsol,
            'separacion' => $request->separacion,
            'abonos' => $request->abonos,
            'tratamiento' => $request->tratamiento,
            'asociaciones' => $request->asociaciones,
        ]);

        return to_route('hortalizas.index')->with('message','Hortaliza insertada!');
    }

    public function update(Request $request, Hortaliza $hortaliza){

        //******************************************/
        // Primero tratamos y almacenamos la imagen
        //******************************************/
        if ($request->hasFile('imagen')) {

            $imagen = $request->file('imagen'); //Recogemos en memoria la imagen para tratarla.
            
            $nombreImagen = Str::uuid() . "." . $imagen->extension(); //Esta línea (uuid) genera un id único para cada imagen.
            
            $imagenServidor = Image::make($imagen); //Este es el método que permite crear una imagen usando la librería intervention.
            $imagenServidor->fit(1000,1000); //Estos son métodos propios de la libreria interventionImage para tratar las imágenes.
            //Apuntamos a la carpeta deseada.
            $imagenPath=public_path('uploads/') . $nombreImagen; 
            //Movemos la imagen al servidor en la ruta especificada.
            $imagenServidor->save($imagenPath);
            // response()->json(['imagen' => $nombreImagen]); //Convierte el arreglo a json
        }
        
        //******************************************/
        // Actualizamos los campos editados
        //******************************************/
        $request->validate([
            'descripcion' => 'required|max:100',
            'variedad' => 'required',
            'epoca_siembra' => 'required|max:50',
            'tiempo_germ' => 'required|max:50',
            'riego' => 'required|max:100',
            'temperatura_hsol' => 'required|max:100',
            'separacion' => 'required|max:100',
            'abonos' => 'required|max:100',
            'tratamiento' => 'required|max:100',
            'asociaciones' => 'required|max:100',
        ]);

        $family_id = Family::where('nombre',$request->familia)->first();
        
        $hortaliza = Hortaliza::find($hortaliza->id);

        $hortaliza->descripcion = $request->descripcion;
        $hortaliza->variedad = $request->variedad;
        $hortaliza->epoca_siembra = $request->epoca_siembra;
        $hortaliza->tiempo_germ = $request->tiempo_germ;
        $hortaliza->riego = $request->riego;
        $hortaliza->family_id = $family_id->id;
        $hortaliza->temperatura_hsol = $request->temperatura_hsol;
        $hortaliza->separacion = $request->separacion;
        $hortaliza->abonos = $request->abonos;
        $hortaliza->tratamiento = $request->tratamiento;
        $hortaliza->asociaciones = $request->asociaciones;
        if (isset($nombreImagen)) {
            $hortaliza->imagen = $nombreImagen;
        }
        $hortaliza->save();

        return to_route('hortalizas.index')->with('message','Hortaliza editada!');

    }
}
