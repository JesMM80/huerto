@extends('principal')

@section('titulo')
    Usuarios (Livewire)
@endsection

@section('contenido')
    <x-menu-usuario />
    <livewire:list-users />
@endsection