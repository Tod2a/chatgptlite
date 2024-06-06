<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')


            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    ChatGPT Lite
                </div>
            </header>
            <main>
                <div class="flex h-screen">
                    <div class="w-1/6 border-r-4 border-black flex flex-col">
                        <a href="{{ url('/chat') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white border border-gray-300 rounded-lg mx-5 my-2 text-center">
                            Nouvelle discussion
                        </a>
                        <div class="mt-4">
                            Anciennes conversations:
                        </div>
                    </div>
                
                    <div>
                        {{ $slot }}
                    </div>     
                </div>          
                
            </main>
        </div>
    </body>
</html>
