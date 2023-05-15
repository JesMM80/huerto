@extends('principal')

@section('titulo')
    Editar familia: <span class="text-lg text-green-500">{{$familia->nombre}}</span> 
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
                <form action="{{ route('familias.update',$familia) }}" method="POST">
                    @csrf  
                    @method('PUT')
                    <div class="w-full mb-2">
                        <label for="nombre" class="mb-2 block text-gray-600 font-bold">
                            Nombre de la familia
                        </label>
                        <input 
                            class="w-full border border-indigo-500 rounded p-2" 
                            type="text" 
                            name="nombre" 
                            value="{{old('nombre',$familia->nombre)}}" 
                            placeholder="Nombre de la familia">
                        @error('nombre')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="w-full mb-2">
                        <label for="descripcion" class="mb-2 block text-gray-600 font-bold">
                            Descripción de la familia
                        </label>
                        <input 
                            class="w-full border border-indigo-500 rounded p-2" 
                            type="text" 
                            name="descripcion" 
                            value="{{old('descripcion',$familia->descripcion)}}" 
                            placeholder="Descripción de la familia">
                        @error('descripcion')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="w-full mb-2">
                        <label for="necesidades" class="mb-2 block text-gray-600 font-bold">
                            Necesidades
                        </label>
                        <input 
                            class="w-full border border-indigo-500 rounded p-2" 
                            type="text" 
                            name="necesidades" 
                            value="{{old('necesidades',$familia->necesidades)}}" 
                            placeholder="Descripción de la familia">
                        @error('necesidades')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                        @enderror
                    </div>
                    
                    <div class="grid grid-cols-2 place-items-center">
                        <input 
                            type="submit" 
                            value="Guardar" 
                            class="w-2/3 p-2 border border-green-600 bg-green-200 rounded  text-center cursor-pointer">
                        <a href="{{ route('familias.index') }}" class="w-2/3 p-2 border border-indigo-600 bg-indigo-200 rounded text-center cursor-pointer">Volver</a>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection