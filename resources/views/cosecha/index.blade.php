@extends('principal')

@section('titulo','Listado de cosechas')

@section('contenido')
    <x-menu-cosecha />

    <livewire:lista-cosechas />
@endsection