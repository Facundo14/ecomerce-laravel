<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Electricidad La Unión' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="bg-gradient-to-r from-green-600 to-green-500 dark:from-gray-800 dark:to-gray-700">
        @livewire('partials.navbar')
        <main class="flex justify-center items-center">
            {{ $slot }}
        </main>
        @livewire('partials.footer')
        @livewireScripts
    </body>
</html>
