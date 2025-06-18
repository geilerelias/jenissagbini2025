<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>@yield('title')</title>

    @vite(['resources/css/app.css' ])
    <script src="//unpkg.com/alpinejs" defer></script>


    <style>
        body {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
    </style>
</head>
<body class="antialiased">
<section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-white via-gray-100 to-white dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 px-6 font-montserrat">
    <div class="max-w-5xl w-full mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center text-center md:text-left">

        <!-- Imagen con efecto sutil -->
        <div class="flex justify-center">
            <img
                src="{{ asset('images/bg.png') }}"
                alt="@yield('message')"
                class="h-100 w-auto drop-shadow-xl transition-transform duration-300 hover:scale-105"
            />
        </div>

        <!-- Contenido -->
        <div>
            <h1 class="text-6xl lg:text-8xl font-extrabold text-primary-600 dark:text-primary-400 mb-4">@yield('code')</h1>

            <p class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white mb-4">
                @yield('title')
            </p>

            <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                @yield('message')
            </p>

            <p class="text-base text-gray-500 dark:text-gray-400 mb-4 font-medium">
                Aquí hay algunos enlaces útiles en su lugar:
            </p>

            <div class="flex flex-wrap justify-center md:justify-start gap-4">
                <a href="{{ route('home') }}" class="px-4 py-2 rounded-xl  bg-black text-white hover:bg-gray-700 dark:bg-primary-500 dark:hover:bg-primary-600 transition">
                    Inicio
                </a>
                <a href="{{ route('about') }}" class="px-4 py-2 rounded-xl  bg-black text-white  hover:bg-gray-700 dark:bg-primary-500 dark:hover:bg-primary-600 transition">
                    ¿Quién soy?
                </a>
                <a href="{{ route('services') }}" class="px-4 py-2 rounded-xl  bg-black text-white  hover:bg-gray-700 dark:bg-primary-500 dark:hover:bg-primary-600 transition">
                    Servicios
                </a>
                <a href="{{ route('contact') }}" class="px-4 py-2 rounded-xl  bg-black text-white  hover:bg-gray-700 dark:bg-primary-500 dark:hover:bg-primary-600 transition">
                    Contacto
                </a>
            </div>
        </div>
    </div>
</section>


</body>
</html>
