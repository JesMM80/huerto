<div class="w-full">
    <nav class="flex gap-2 items-center">
        <a href="{{route('principal')}}" class="flex items-center gap-0 text-green-600 text-lg mr-2">
            <img src="{{asset('images/logo_huerto.svg')}}" alt="Logo huerto" class="h-16 w-16 mr-5">
            HuertoApp
        </a>
        <a href="{{ route('principal') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-600 dark:hover:text-gray-200 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
            Inicio
        </a>
        <a href="{{ route('hortalizas.index') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-600 dark:hover:text-gray-200 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
            Hortalizas
        </a>
        <a href="{{ route('familias.index') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-600 dark:hover:text-gray-200 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
            Familias
        </a>
        @if (auth()->user()->tipo === 1)
            <a href="{{ route('zonas.index') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-600 dark:hover:text-gray-200 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                Zonas
            </a>            
            <a href="{{ route('riegos.index') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-600 dark:hover:text-gray-200 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                Riegos
            </a>            
        @endif

        @if (auth()->user()->name == 'Jesus')
            <div class="ml-10 text-green-700">
                Hola admin {{auth()->user()->name}}!
            </div>
        @else
            <div class="ml-10 text-green-700">
                Hola {{auth()->user()->name}}!
            </div>          
        @endif
        
        <form action="{{ route('logout') }}" method="POST" class="absolute right-5">
            @csrf
            <button class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-600 dark:hover:text-gray-200 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 ml-2">
                Desconectar
            </button>
        </form>
    </nav>
</div>