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
<div class="w-full bg-green-100 border border-gray-500 grid grid-cols-3">
    <div class=" w-full bg-green-300 col-span-3 grid grid-cols-2">
        <div class="w-full">
            <p class="font-bold">
                Zona
            </p>
        </div>
        <div class="w-full">
            <p class="font-bold">
                Hortaliza
            </p>
        </div>
    </div>
    @foreach ($zonas as $zona)
        <div class=" w-full hover:bg-green-300 col-span-2 grid grid-cols-3">
            <div class="w-full">
                <p class="font-bold">
                    {{$zona->zona->lugar}}
                </p>
            </div>
            <div class="w-full">
                <p class="text-lg font-bold">
                    @if($zona->hortaliza)
                        Descripción: {{$zona->hortaliza->descripcion}}
                    @else
                        <p>Sin datos.</p>
                    @endif                    
                </p>
                <p class="text-sm">
                    @if($zona->hortaliza)
                        Variedad: {{$zona->hortaliza->variedad}}
                    @else
                        <p>Sin datos.</p>
                    @endif                   
                </p>
            </div>
        </div>
        <div class="p-2 flex items-center justify-center hover:bg-green-300 ">

            {{-- <a href="{{ route('zona.edit',$zona) }}" class="" alt="editar zona"> --}}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 rounded  bg-indigo-300 hover:bg-indigo-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>                                            
            </a>

            {{-- <x-bt-borra-hortaliza-zona :zona="$zona" /> --}}
            @if($zona->hortaliza)
                <x-bt-borra-hortaliza-zona :zona="$zona->hortaliza->created_at" :id="$zona->id"  />
            @else
                <p>Sin datos.</p>
            @endif 
                
            {{-- <x-bt-borra-hortaliza-zona>
                {{$zona->hortaliza->variedad}}
            </x-bt-borra-hortaliza-zona> --}}
        </div>
    @endforeach
</div> 
@endsection