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

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                
                <div class="mt-5 mx-auto">
                    <div class="scale-100 p-6 bg-white dark:bg-gray-700/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none  motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div class="h-16 w-16  mx-auto ">
                                <img src="{{asset('images/logo_huerto.svg')}}" alt="Logo huerto">
                            </div>

                            <h2 class="mt-2 text-xl font-semibold text-black dark:text-black">Registro de usuario</h2>

                            <p class="mt-1 text-gray-500 dark:text-gray-200 text-sm leading-relaxed">
                                Puede registrarse en App Huerto y consultar información de las hortalizas cultivadas.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="shadow-2xl shadow-gray-500/20 mt-10 p-6 bg-white dark:bg-gray-700/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent rounded-lg motion-safe:hover:scale-[1.01] transition-all duration-250">
                    <form action="{{route('register.store')}}" method="post">
                        @csrf
                        <div class="w-full mb-2">
                            <label for="name" class="mb-2 block text-gray-600 font-bold">Nombre y apellidos</label>
                            <input 
                                class="w-full border border-indigo-500 rounded p-2 @error('name')
                                    border-red-600
                                @enderror" 
                                type="text" 
                                name="name" 
                                value="{{old('name')}}" 
                                placeholder="Nombre y apellidos">
                                @error('name')
                                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                                @enderror
                        </div>
                        <div class="w-full mb-2">
                            <label for="email" class="mb-2 block text-gray-600 font-bold">Email</label>
                            <input class="w-full border border-indigo-500 rounded p-2" type="text" name="email" id="email" placeholder="Nombre y apellidos">
                        </div>
                        <div class="w-full mb-2">
                            <label for="password" class="mb-2 block text-gray-600 font-bold">Contraseña</label>
                            <input class="w-full border border-indigo-500 rounded p-2" type="password" name="password" id="password">
                        </div>
                        <div class="w-full mb-2">
                            <label for="password_confirmation" class="mb-2 block text-gray-600 font-bold">Repetir contraseña</label>
                            <input class="w-full border border-indigo-500 rounded p-2" type="password" name="password_confirmation" id="password_confirmation">
                        </div>
                        <input type="submit" value="Registrar" class="cursor-pointer w-full mt-2 p-2 border border-indigo-600 bg-indigo-200 rounded">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
