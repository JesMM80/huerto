@extends('principal')

@section('titulo')
    Listado de hortalizas sembradas
@endsection

@section('contenido')
    <x-busqueda-hortaliza />

    <div class="w-full bg-slate-100 border-b border-gray-500">
        <nav class="mb-1 grid grid-cols-4 gap-6 text-center">
            <a href="{{ route('hortalizas.create') }}" class="px-2 py-1 border border-indigo-500 bg-indigo-200 rounded hover:bg-indigo-300">
                Insertar hortaliza
            </a>
            <a href="{{ route('siembra.create') }}" class="px-2 py-1 border border-indigo-500 bg-indigo-200 rounded hover:bg-indigo-300">
                Sembrar hortaliza
            </a>
            <a href="{{ route('hortalizas.index') }}" class="px-2 py-1 border border-indigo-500 bg-indigo-200 rounded hover:bg-indigo-300">
                Listar hortalizas
            </a>
            <a href="{{route('sembradas.index')}}" class="px-2 py-1 border border-indigo-500 bg-indigo-200 rounded hover:bg-indigo-300">
                Listar hortalizas sembradas
            </a>
        </nav>
    </div>

    <livewire:hortalizas-sembradas />

@endsection