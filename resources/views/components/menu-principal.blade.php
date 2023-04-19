<div class="w-full">
    <nav class="flex gap-2 items-center">
        <a href="{{route('principal')}}" class="flex items-center gap-0 text-green-600 text-lg mr-2">
            <img src="{{asset('images/logo_huerto.svg')}}" alt="Logo huerto" class="h-16 w-16 mr-5">
            HuertoApp
        </a>
        <a href="{{ route('principal') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-600 dark:hover:text-gray-200 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
            Inicio
        </a>
        <a href="" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-600 dark:hover:text-gray-200 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
            Productos
        </a>
        <a href="" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-600 dark:hover:text-gray-200 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
            Familias
        </a>        
        <form action="{{ route('logout') }}" method="POST" class="absolute right-5">
            @csrf
            <button class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-600 dark:hover:text-gray-200 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 ml-2">
                Desconectar
            </button>
        </form>
    </nav>
</div>