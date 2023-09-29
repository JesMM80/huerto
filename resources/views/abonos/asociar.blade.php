@extends('principal')

@section('titulo','Asociación de abonos con hortalizas')

@section('contenido')
<x-menu-abono />
    <div class="w-full mx-auto p-1 lg:p-1 mt-5 mb-5">
        
        <div class="shadow-2xl shadow-gray-500/20 p-6 bg-white dark:bg-gray-700/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent rounded-lg motion-safe:hover:scale-[1.01] transition-all duration-250">
            <form action="{{ route('abonos.storeAsociacion') }}" method="POST">
                @csrf  

                <div class="grid grid-cols-2 gap-2">
                    <div class="w-full mb-2">
                        <label class="mb-2 block text-gray-600 font-bold">
                            Abono
                        </label>
                        <select name="nombre" class="w-full border border-indigo-500 rounded p-2">
                            @foreach ($abonos as $abono)
                                <option value="{{$abono->id}}">{{$abono->nombre}}</option>                                
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="w-full mb-2">
                        <label class="mb-2 block text-gray-600 font-bold">
                            Hortaliza
                        </label>
                        <select name="hortaliza" class="w-full border border-indigo-500 rounded p-2">
                            @foreach ($hortalizas as $hortaliza)
                                <option value="{{$hortaliza->id}}">{{$hortaliza->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2">
                    <div class="w-full mb-2">
                        <label class="mb-2 block text-gray-600 font-bold">
                            Guarda asociación
                        </label>
                        <input 
                            type="submit" 
                            value="Guardar" 
                            class="w-full p-2 border border-green-600 bg-green-200 rounded  text-center cursor-pointer hover:bg-green-400"
                        >
                    </div>
                    
                    <div class="w-full mb-2">
                        <label class="mb-2 block text-gray-600 font-bold">
                            Volver a listado de asociaciones
                        </label>
                        <a href="{{ route('abonos.index') }}" class="w-full p-2 border border-indigo-600 bg-indigo-200 hover:bg-indigo-400 rounded text-center cursor-pointer inline-block">
                            Volver
                        </a>
                    </div>
                </div>
                                
            </form>
        </div>
    </div>
@endsection