<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AppHuerto</title>
        @vite('resources/css/app.css')
    </head>
    
    <body class="antialiased">
        <header class="p-2 border-b bg-white shadow flex items-center">
            <x-menu-principal />           
        </header>
        @if (session('message'))
            <div class="p-2 border border-green-600 bg-green-200 font-bold mt-2 mb-2 text-center">
                <p class="mt-1 text-gray-500 dark:text-gray-600 text-sm leading-relaxed">
                    {{ session('message') }}
                </p>
            </div>
        @endif

        <main class="container mx-auto mt-5">
            <h2 class="text-center font-black text-2xl mb-5">@yield('titulo')</h2>
            @yield('contenido')
        </main>

        <footer class="mt-5 text-center p-4 text-gray-500 font-bold">
            App Huerto {{now()->year}}
        </footer>
                
    </body>
</html>
