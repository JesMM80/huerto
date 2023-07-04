<div>
    <div class="grid grid-cols-2 items-center col-span-2">
        <form action="{{route('zonas.destroy',$id)}}" name="aaa" id="aaa" method="POST">
            @csrf
            @method('DELETE')
            <button class="p-2" onclick="borrarZona()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 rounded  bg-red-400 mr-4 hover:bg-red-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>                  
            </button>
            <p class="items-center">
                {{$zona}}
            </p>
        </form>
    </div>
    
    @push('sweetAlertScript')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            //Aquí disponemos de una global, un event listener a la cual le pasamos el evento y definimos
            //una función anónima que ejecutará el código cuando escuche el evento
            function borrarZona() {

                Swal.fire({
                    title: 'Estás seguro?',
                    text: "Se eliminará la familia!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Eliminar'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById("aaa").submit();
                        Swal.fire(
                        'Eliminada!',
                        'La familia fué eliminada.',
                        'success'
                        )
                    }
                })
            }

        </script>
    @endpush

</div>