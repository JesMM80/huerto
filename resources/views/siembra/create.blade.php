@extends('principal')

@section('titulo')
    Sembrar hortaliza
@endsection

@section('contenido')
    <div class="relative sm:flex sm:justify-center bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-100 selection:bg-red-500 selection:text-white">
            
        <div class="max-w-7xl mx-auto p-1 lg:p-1 w-2/3 mt-5 mb-5">
                            
            {{-- @if (session('message'))
                <div class="p-2 border border-red-600 bg-red-300 text-white font-bold mt-2 mb-2">
                    <p class="mt-1 text-gray-500 dark:text-gray-200 text-sm leading-relaxed">
                        {{ session('message') }}
                    </p>
                </div>
            @endif --}}
            
            <div class="shadow-2xl shadow-gray-500/20 p-6 bg-white dark:bg-gray-700/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent rounded-lg motion-safe:hover:scale-[1.01] transition-all duration-250">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf  

                    <div class="w-full mb-2">
                        <label for="descripcion" class="mb-2 block text-gray-600 font-bold">
                            Descripción
                        </label>
                        <select name="descripcion" class="w-full border border-indigo-500 rounded p-2">
                            @foreach ($hortalizas as $hortaliza)
                                <option value="{{ $hortaliza->descripcion }}">{{ $hortaliza->descripcion }}</option>                                    
                            @endforeach
                        </select>
                        @error('descripcion')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                        @enderror
                    </div>
                    
                    <div class="grid grid-cols-2 gap-1">

                        <div class="w-full mb-2">
                            <label for="cantidad" class="mb-2 block text-gray-600 font-bold">
                                Cantidad
                            </label>
                            <input 
                                class="w-full border border-indigo-500 rounded p-2" 
                                type="text" 
                                name="cantidad" 
                                value="{{old('cantidad')}}" 
                                placeholder="Cantidad de plantas">
                            @error('cantidad')
                                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="w-full mb-2">
                            <label for="fecha" class="mb-2 block text-gray-600 font-bold">
                                Fecha
                            </label>
                            <input 
                                class="w-full border border-indigo-500 rounded p-2" 
                                type="date" 
                                name="fecha" 
                                value="{{old('fecha')}}" 
                                placeholder="Fecha de siembra">
                            @error('fecha')
                                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="w-full mb-2">
                        <label for="imagen" class="mb-2 block text-gray-600 font-bold">
                            Hortaliza
                        </label>

                    
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

<script type="text/javascript">
    $(function() {
      $( "#datepicker" ).datepicker({
        changeMonth: true,
        changeYear: true
      });
    });
    </script>