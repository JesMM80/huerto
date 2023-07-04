@extends('principal')

@section('titulo')
    Insertar tipo de riego
@endsection

@section('contenido')

    <div class="relative sm:flex sm:justify-center bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-100 selection:bg-red-500 selection:text-white">
        
        <div class="max-w-7xl mx-auto p-1 lg:p-1 w-2/3 mt-5 mb-5">
                            
            @if (session('message'))
                <div class="p-2 border border-red-600 bg-red-300 text-white font-bold mt-2 mb-2">
                    <p class="mt-1 text-gray-500 dark:text-gray-200 text-sm leading-relaxed">
                        {{ session('message') }}
                    </p>
                </div>
            @endif
            
            <div class="shadow-2xl shadow-gray-500/20 p-6 bg-white dark:bg-gray-700/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent rounded-lg motion-safe:hover:scale-[1.01] transition-all duration-250">
                {{-- Introducimos el formulario que está en un componente livewire --}}
                <livewire:tipo-riego>
            </div>
        </div>
    </div>
@endsection