@extends('principal')

@section('titulo')
    Familias de hortalizas
@endsection

@section('contenido')
    <div class="w-full bg-slate-100 border-b border-gray-500">
        <nav class="mb-1">
            <a href="{{ route('familias.create') }}" class="px-2 py-1 border border-indigo-500 bg-indigo-200 rounded hover:bg-indigo-300">Insertar familia</a>
            <a href="{{ route('familias.index') }}" class="px-2 py-1 border border-indigo-500 bg-indigo-200 rounded hover:bg-indigo-300">Listar familias</a>
        </nav>

    </div>
    <div class="w-full bg-green-100 border border-gray-500 grid grid-cols-3">
        @foreach ($familias as $familia)
            <div class=" w-full hover:bg-green-300 col-span-2 grid grid-cols-2">
                <div class="flex justify-center w-1/3">
                    @if($familia->imagen == '')
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                        </svg>
                    @else
                        <img src="{{asset("uploads"). "/" . $familia->imagen }}" alt="img familia">
                    @endif
                </div>
                <div class="w-full">
                    <p class="font-bold">
                        {{$familia->nombre }}
                    </p>
                    <p class="text-sm">
                        {{$familia->descripcion }}
                    </p>
                </div>
            </div>
            <div class="p-2 flex items-center justify-center hover:bg-green-300 ">
                <form action="{{ route('familias.destroy',$familia->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 rounded  bg-red-400 mr-4 hover:bg-red-100">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>                  
                    </button>
                </form>
                <a href="{{ route('familias.edit',$familia) }}" class="" alt="editar familia">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 rounded  bg-indigo-300 hover:bg-indigo-100">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>                                            
                </a>
            </div>
        @endforeach
    </div>
    
@endsection