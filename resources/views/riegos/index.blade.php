@extends('principal')

@section('titulo')
    Listado de riegos
@endsection

@section('contenido')

    <div class="w-full bg-slate-100 border-b border-gray-500">
        <nav class="mb-1 grid grid-cols-4 gap-6 text-center">
            <a href="{{ route('riegos.create') }}" class="px-2 py-1 border border-indigo-500 bg-indigo-200 rounded hover:bg-indigo-300">
                Insertar tipo riego
            </a>
            <a href="{{ route('riegos.index') }}" class="px-2 py-1 border border-indigo-500 bg-indigo-200 rounded hover:bg-indigo-300">
                Listar tipo riego
            </a>
        </nav>
    </div>
    <div class="w-full bg-green-100 border border-gray-500">
        
        <livewire:listar-riegos />
        
    </div>
    
@endsection