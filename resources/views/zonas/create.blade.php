@extends('principal')

@section('titulo')
    Zonas de cultivo
@endsection

@section('contenido')
    <div class="w-full bg-slate-100 border-b border-gray-500">
        <nav class="mb-1">
            <a href="{{ route('zonas.create') }}" class="px-2 py-1 border border-indigo-500 bg-indigo-200 rounded hover:bg-indigo-300">
                Insertar zona
            </a>
            <a href="{{ route('zonas.index') }}" class="px-2 py-1 border border-indigo-500 bg-indigo-200 rounded hover:bg-indigo-300">
                Listar zonas
            </a>
        </nav>
    </div>
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
                <form action="{{route('zonas.store')}}" method="POST">
                    @csrf  

                    <div class="w-full mb-2">
                        <label for="hortaliza" class="mb-2 block text-gray-600 font-bold">
                            Hortaliza
                        </label>
                        <select name="hortaliza" class="w-full border border-indigo-500 rounded p-2">
                            @foreach ($hortalizas as $hortaliza)
                                <option value="{{ $hortaliza->id }}">{{ $hortaliza->descripcion }}</option>                                    
                            @endforeach
                        </select>
                        @error('hortaliza')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                        @enderror
                    </div>
                    
                    <div class="">

                        <div class="w-full mb-2">
                            <label for="zona" class="mb-2 block text-gray-600 font-bold">
                                Zona
                            </label>
                            <select name="zona" id="zona" class="w-full border border-indigo-500 rounded p-2">
                                @foreach ($zonas as $zona)
                                    <option value="{{ $zona->id }}">{{ $zona->lugar }}</option>                                    
                                @endforeach
                            </select>
                            @error('zona')
                                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-2 place-items-center">
                        <input 
                            type="submit" 
                            value="Guardar" 
                            class="w-2/3 p-2 border border-green-600 bg-green-200 rounded  text-center cursor-pointer">
                        <a href="{{ route('zonas.index') }}" class="w-2/3 p-2 border border-indigo-600 bg-indigo-200 rounded text-center cursor-pointer">Volver</a>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection