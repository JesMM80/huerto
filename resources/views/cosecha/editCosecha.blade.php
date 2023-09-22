@extends('principal')
@section('titulo','Editar cosecha')

@section('contenido')
    <livewire:edit-cosecha :cosecha="$cosecha" />
@endsection