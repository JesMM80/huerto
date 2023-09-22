@extends('principal')
@section('titulo','Editar cosecha')

@section('contenido')
    <div class="w-full mx-auto p-1 lg:p-1 mt-5 mb-5">
                
        <div class="shadow-2xl shadow-gray-500/20 p-6 bg-white dark:bg-gray-700/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent rounded-lg motion-safe:hover:scale-[1.01] transition-all duration-250">
            <form action="{{ route('cosecha.update',$cosechas) }}" method="POST">
                @csrf  
                @method('PUT')
                <div class="grid grid-cols-2 gap-2">
                    <div class="w-full mb-2">
                        <label class="mb-2 block text-gray-600 font-bold">
                            Hortaliza
                        </label>
                        <select name="hortaliza" class="w-full border border-indigo-500 rounded p-2">
                            @foreach ($hortalizas as $hortaliza)
                                <option value="{{$hortaliza->id}}" @selected($hortaliza->id == $cosechas->hortaliza_id)> 
                                   {{$hortaliza->descripcion}} 
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="w-full mb-2">
                        <label class="mb-2 block text-gray-600 font-bold">
                            Zona de cosecha
                        </label>
                        <select name="zona" class="w-full border border-indigo-500 rounded p-2">
                            @foreach ($zonas as $zona)
                                <option value="{{$zona->id}}" @selected($zona->id == $cosechas->zona->id)>
                                    {{$zona->lugar}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-2">
                    <div class="w-full mb-2">
                        <label for="kilos" class="mb-2 block text-gray-600 font-bold">
                            Kilos
                        </label>
                        <input 
                            class="w-full border border-indigo-500 rounded p-2" 
                            type="text" 
                            name="kilos" 
                            value="{{old('kilos',$cosechas->kilos)}}" 
                            placeholder="kilos recogidos">
                        @error('kilos')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="w-full mb-2">
                        <label for="usuario" class="mb-2 block text-gray-600 font-bold">
                            Usuario
                        </label>
                        <input 
                            class="w-full border border-indigo-500 bg-gray-200 rounded p-2" 
                            type="text" 
                            name="usuario" 
                            disabled
                            value="{{old('usuario',$cosechas->user->name)}}">
                    </div>
                </div>
                
                <input 
                    type="submit" 
                    value="Guardar" 
                    class="w-full p-2 border border-green-600 bg-green-200 rounded  text-center cursor-pointer"
                >
                
                <a href="{{ route('cosecha.index') }}" class="w-full mt-2 p-2 border border-indigo-600 bg-indigo-200 rounded text-center cursor-pointer inline-block">
                    Volver
                </a>
            </form>
        </div>
    </div>
@endsection