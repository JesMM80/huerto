@extends('principal')

@section('titulo')
    Usuarios (Livewire)
@endsection

@section('contenido')
    <div class="w-full bg-slate-100 border-b border-gray-500">
        <nav class="mb-1">
            <a href="{{ route('user.create') }}" class="mr-1 px-2 py-1 border border-green-700 bg-green-200 rounded hover:bg-green-300">
                Insertar usuario
            </a>
            <a href="{{ route('user.index2') }}" class="mr-1 px-2 py-1 border border-green-700 bg-green-200 rounded hover:bg-green-300">
                Listar usuarios
            </a>
            <a href="{{ route('user.listadmin') }}" class="mr-1 px-2 py-1 border border-green-700 bg-green-200 rounded hover:bg-green-300">
                Listar administradores
            </a>
        </nav>
    </div>
    <livewire:list-users />
@endsection