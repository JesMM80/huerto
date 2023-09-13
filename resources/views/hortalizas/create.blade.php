@extends('principal')

@section('titulo')
    Insertar nueva hortaliza
@endsection

@section('contenido')
<div class="relative sm:flex sm:justify-center bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-100 selection:bg-red-500 selection:text-white">
        
    <div class="max-w-7xl mx-auto p-1 lg:p-1 w-2/3 mt-5 mb-5">
                        
        @if (session('message'))
            <div class="p-2 border border-red-600 bg-red-300 text-white font-bold mt-2 mb-2">
                <p class="mt-1 text-gray-500 dark:text-gray-200 text-sm leading-relaxed">
                    {{ session('message') }}
                </p>
            </div>
        @endif
        
        <div class="shadow-2xl shadow-gray-500/20 p-6 bg-white dark:bg-gray-700/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent rounded-lg motion-safe:hover:scale-[1.01] transition-all duration-250">
            <form action="{{ route('hortalizas.store') }}" method="POST" enctype="multipart/form-data">
                @csrf  

                <div class="w-full mb-2">
                    <label for="descripcion" class="mb-2 block text-gray-600 font-bold">
                        Descripción
                    </label>
                    <input 
                        class="w-full border border-indigo-500 rounded p-2" 
                        type="text" 
                        name="descripcion" 
                        value="{{old('descripcion')}}" 
                        placeholder="Descripcion de la hortaliza">
                    @error('descripcion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="w-full mb-2">
                    <label for="variedad" class="mb-2 block text-gray-600 font-bold">
                        Variedad de la hortaliza
                    </label>
                    <input 
                        class="w-full border border-indigo-500 rounded p-2" 
                        type="text" 
                        name="variedad" 
                        value="{{old('variedad')}}" 
                        placeholder="Variedad">
                    @error('variedad')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div class="grid grid-cols-3 gap-1">
                    <div class="w-full mb-2">
                        <label for="familia" class="mb-2 block text-gray-600 font-bold">
                            Familia
                        </label>
                        <select name="familia" class="w-full border border-indigo-500 rounded p-2">
                            @foreach ($familias as $familia)
                                <option value="{{ $familia->nombre }}">{{ $familia->nombre }}</option>                                    
                            @endforeach
                        </select>
                    </div>

                    <div class="w-full mb-2">
                        <label for="epoca_siembra" class="mb-2 block text-gray-600 font-bold">
                            Época de siembra
                        </label>
                        <input 
                            class="w-full border border-indigo-500 rounded p-2" 
                            type="text" 
                            name="epoca_siembra" 
                            value="{{old('epoca_siembra')}}" 
                            placeholder="Época de siembra">
                        @error('epoca_siembra')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="w-full mb-2">
                        <label for="tiempo_germ" class="mb-2 block text-gray-600 font-bold">
                            Tiempo germinación
                        </label>
                        <input 
                            class="w-full border border-indigo-500 rounded p-2" 
                            type="text" 
                            name="tiempo_germ" 
                            value="{{old('tiempo_germ')}}" 
                            placeholder="Tiempo germinación">
                        @error('tiempo_germ')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-1">

                    <div class="w-full mb-2">
                        <label for="riego" class="mb-2 block text-gray-600 font-bold">
                            Cantidad de riego
                        </label>
                        <input 
                            class="w-full border border-indigo-500 rounded p-2" 
                            type="text" 
                            name="riego" 
                            value="{{old('riego')}}" 
                            placeholder="Cantidad de riego">
                        @error('riego')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="w-full mb-2">
                        <label for="temperatura_hsol" class="mb-2 block text-gray-600 font-bold">
                            Temperaturas y horas de sol
                        </label>
                        <input 
                            class="w-full border border-indigo-500 rounded p-2" 
                            type="text" 
                            name="temperatura_hsol" 
                            value="{{old('temperatura_hsol')}}" 
                            placeholder="Horas de sol">
                        @error('temperatura_hsol')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                        @enderror
                    </div>
                        
                    <div class="w-full mb-2">
                        <label for="separacion" class="mb-2 block text-gray-600 font-bold">
                            Separación entre plantas
                        </label>
                        <input 
                            class="w-full border border-indigo-500 rounded p-2" 
                            type="text" 
                            name="separacion" 
                            value="{{old('separacion')}}" 
                            placeholder="Separación">
                        @error('separacion')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="w-full mb-2">
                    <label for="abonos" class="mb-2 block text-gray-600 font-bold">
                        Abonos
                    </label>
                    <input 
                        class="w-full border border-indigo-500 rounded p-2" 
                        type="text" 
                        name="abonos" 
                        value="{{old('abonos')}}" 
                        placeholder="Abonos">
                    @error('abonos')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="w-full mb-2">
                    <label for="tratamiento" class="mb-2 block text-gray-600 font-bold">
                        Tratamientos contra insectos
                    </label>
                    <input 
                        class="w-full border border-indigo-500 rounded p-2" 
                        type="text" 
                        name="tratamiento" 
                        value="{{old('tratamiento')}}" 
                        placeholder="Tratamientos">
                    @error('tratamiento')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="w-full mb-2">
                    <label for="asociaciones" class="mb-2 block text-gray-600 font-bold">
                        Asociaciones con otras plantas
                    </label>
                    <input 
                        class="w-full border border-indigo-500 rounded p-2" 
                        type="text" 
                        name="asociaciones" 
                        value="{{old('asociaciones')}}" 
                        placeholder="Asociaciones">
                    @error('asociaciones')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="w-full mb-2">
                    <label for="imagen" class="mb-2 block text-gray-600 font-bold">
                        Hortaliza
                    </label>

                    <input type="file" id="imagen" name="imagen" class="block mt-1 w-full">

                    @error('imagen')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                   
                </div>
                
                <div class="grid grid-cols-2 place-items-center">
                    <input 
                        type="submit" 
                        value="Guardar" 
                        class="w-2/3 p-2 border border-green-600 bg-green-200 rounded  text-center cursor-pointer">
                    <a href="{{ route('hortalizas.index') }}" class="w-2/3 p-2 border border-indigo-600 bg-indigo-200 rounded text-center cursor-pointer">Volver</a>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection