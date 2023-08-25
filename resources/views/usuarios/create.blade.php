@extends('principal')

@section('titulo','Nuevo usuario (No livewire)')

@section('contenido')

    <div class="relative sm:flex sm:justify-center bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-100 selection:bg-red-500 selection:text-white">
        <div class="max-w-7xl mx-auto p-1 lg:p-1 w-2/3 mt-5 mb-5">
            <div class="shadow-2xl p-6 bg-white rounded-lg">
                <form action="{{route('user.store')}}" method="POST">
                    @csrf
                    <div class="w-full mb-2">
                        <label for="descripcion" class="mb-2 block text-gray-600 font-bold">
                            Nombre
                        </label>                        
                    </div>
                    <div class="w-full mb-2">
                        <input 
                            type="text" 
                            name="name" 
                            class="w-full border border-green-600 rounded p-2 bg-green-50"
                            value="{{old('name')}}">  
                        @error('name')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                                {{$message}}
                            </p>
                        @enderror                         
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <div class="w-full mb-2">
                                <label for="descripcion" class="mb-2 block text-gray-600 font-bold">
                                    Email
                                </label>                        
                            </div>
                            <div class="w-full mb-2">
                                <input 
                                    type="text" 
                                    name="email" 
                                    class="w-full border border-green-600 rounded p-2 bg-green-50"
                                    value="{{old('email')}}">   
                                @error('email')
                                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                                        {{$message}}
                                    </p>
                                @enderror                         
                            </div>
                        </div>
                        <div>
                            <div class="w-full mb-2">
                                <label for="descripcion" class="mb-2 block text-gray-600 font-bold">
                                    Password
                                </label>                        
                            </div>
                            <div class="w-full mb-2">
                                <input 
                                    type="password" 
                                    name="password" 
                                    class="w-full border border-green-600 rounded p-2 bg-green-50"
                                    value="{{old('password')}}">
                                @error('password')
                                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                                        {{$message}}
                                    </p>
                                @enderror                           
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="w-full mb-2">
                            <label for="descripcion" class="mb-2 block text-gray-600 font-bold">
                                Tipo usuario
                            </label>                        
                        </div>
                        <div class="w-full mb-2">
                            <select name="tipo" class="w-full border border-green-600 rounded p-2 bg-green-50">
                                <option value="0">Usuario</option>
                                <option value="1">Administrador</option>
                            </select>
                            @error('tipo')
                                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                                    {{$message}}
                                </p>
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