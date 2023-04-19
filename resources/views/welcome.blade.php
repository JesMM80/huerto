<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-100 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 ml-2">Log out</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                                
                <div class="mt-5 mx-auto">
                    <div class="scale-100 p-6 bg-white dark:bg-gray-700/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none  motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div class="h-16 w-16  mx-auto ">
                                <img src="{{asset('images/logo_huerto.svg')}}" alt="Logo huerto">
                            </div>

                            <h2 class="mt-2 text-xl font-semibold text-black dark:text-black">App Huerto</h2>

                            <p class="mt-1 text-gray-500 dark:text-gray-200 text-sm leading-relaxed">
                                App Huerto es una aplicación para la gestión y control de las hortalizas cultivadas.
                            </p>
                        </div>
                    </div>
                </div>
                
                @if (session('message'))
                    <div class="p-2 border border-red-600 bg-red-300 text-white font-bold mt-2 mb-2">
                        <p class="mt-1 text-gray-500 dark:text-gray-200 text-sm leading-relaxed">
                            {{ session('message') }}
                        </p>
                    </div>
                @endif
                
                @guest()
                    <div class="shadow-2xl shadow-gray-500/20 mt-10 p-6 bg-white dark:bg-gray-700/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent rounded-lg motion-safe:hover:scale-[1.01] transition-all duration-250">
                        <form action="{{ route('login.inicio') }}" method="post">
                            @csrf                           
                            <div class="w-full mb-2">
                                <label for="email" class="mb-2 block text-gray-600 font-bold">Email</label>
                                <input class="w-full border border-indigo-500 rounded p-2" type="text" name="email" id="email" placeholder="Nombre y apellidos">
                                @error('email')
                                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="w-full mb-2">
                                <label for="password" class="mb-2 block text-gray-600 font-bold">Contraseña</label>
                                <input class="w-full border border-indigo-500 rounded p-2" type="password" name="password" id="password">
                                @error('password')
                                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                                @enderror
                            </div>
                            
                            <input 
                                type="submit" 
                                value="Iniciar sesión" 
                                class="mt-2 p-2 border border-indigo-600 bg-indigo-200 rounded w-full mb-4 cursor-pointer">
                        </form>
                        <p class="mb-2">No registrado? Puedes registrarte aquí </p>
                        <a href="{{route('register.create')}}" class="p-2 border border-green-600 bg-green-200 rounded flex text-center">Registrarse</a>
                    </div>
                    
                @endguest
            </div>
        </div>
    </body>
</html>
