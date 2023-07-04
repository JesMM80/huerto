<div>
    <div class="w-full hover:bg-green-300 grid grid-cols-3 text-center">
        <div class="w-full">
            <p class="font-bold">
                Tipo
            </p>
        </div>
        <div class="w-full">
            <p class="font-bold">
                Veces al día
            </p>
        </div>
        <div class="w-full">
            <p class="font-bold">
                Acciones
            </p>
        </div>
    </div>
    @foreach ($riegos as $riego)
            <div class="w-full grid grid-cols-3 text-center place-items-center">
                <div class="w-full hover:bg-green-300 ">
                    <p class="text-sm ">
                        {{$riego->tipo }}
                    </p>
                </div>
                <div class="w-full hover:bg-green-300">
                    <p class="text-sm">
                        {{$riego->vecesDia }}
                    </p>
                </div>
                <div class="p-2 flex justify-center hover:bg-green-300 ">
                    <button wire:click="$emit('eliminaRiegoAlert',{{$riego->id}})">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 rounded  bg-red-400 mr-4 hover:bg-red-100">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>                  
                    </button>
                    <a href="{{route('riegos.edit',$riego->id)}}" class="" alt="editar riego" title="Editar riego">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 rounded  bg-indigo-300 hover:bg-indigo-100">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>                                            
                    </a>
                    {{-- <livewire:sembrado-hortaliza :riego="$riego"  />                 --}}
                </div>
            </div>
        @endforeach

            
    @push('sweetAlertScript')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            //Aquí disponemos de una global, un event listener a la cual le pasamos el evento y definimos
            //una función anónima que ejecutará el código cuando escuche el evento
            livewire.on('eliminaRiegoAlert', function(riego) {

                Swal.fire({
                    title: 'Estás seguro?',
                    text: "Se eliminará el tipo de riego!"+riego,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Eliminar'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Eliminado!',
                            'El tipo de riego fué eliminado.',
                            'success'
                        )
                        Livewire.emit('eliminaRiego',riego);

                    }
                })
            })

        </script>
    @endpush
</div>
