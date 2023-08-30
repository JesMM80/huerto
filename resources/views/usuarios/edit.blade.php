@extends('principal')

@section('titulo','Edit Usuarios (No livewire)')
    
@section('contenido')
    <div class="relative sm:flex sm:justify-center bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-100 selection:bg-red-500 selection:text-white">
            
        <div class="max-w-7xl mx-auto p-1 lg:p-1 w-2/3 mt-5 mb-5">
                            
            <x-alerta-guardado />
            
            <div class="shadow-2xl p-6 bg-white rounded-lg">
                <form action="{{route('user.update',$usuarios)}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="w-full mb-2 grid grid-cols-2">
                        <div>
                            <label for="descripcion" class="mb-2 block text-gray-600 font-bold">
                                Nombre
                            </label>                            
                            <input 
                                class="w-full border border-green-600 rounded p-2 bg-green-50" 
                                type="text" 
                                name="name" 
                                value="{{old('name',$usuarios->name)}}" 
                                placeholder="Nombre del usuario"
                            >
                            @error('name')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <livewire:etiqueta-user :usuario="$usuarios"/>
                        </div>
                    </div>

                    <div class="w-full mb-2 grid grid-cols-2 gap-1">
                        <div class="text-center">
                            <label for="descripcion" class="mb-2 block text-gray-600 font-bold">
                                Tipo usuario
                            </label>
                            <select name="tipo" class="w-full border border-green-600 rounded p-2 bg-green-50"> 
                                <option value="0" @if($usuarios->tipo == 0)selected @endif>Usuario</option>
                                <option value="1" @selected($usuarios->tipo == 1)>Administrador</option>
                            </select>
                            @error('tipo')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                            @enderror
                        </div>    
                        <div class="text-center">
                            <label for="descripcion" class="mb-2 block text-gray-600 font-bold">
                                Email
                            </label>
                            <input type="text" name="email" value="{{old('email',$usuarios->email)}}" class="w-full border border-green-600 rounded p-2 bg-green-50">
                            @error('email')
                                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                            @enderror
                        </div>    
                    </div>

                    <x-bt-guardar>
                        Guardar datos usuario
                    </x-bt-guardar>    
                </form>
            </div>
        </div>
    </div>
@endsection