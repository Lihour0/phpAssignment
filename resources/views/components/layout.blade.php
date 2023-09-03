<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Course</title>
        <x-nav />
        @vite ('resources/css/app.css')
        @vite ('resources/js/app.js')
        @livewireStyles
    </head>
    <body class="bg-zinc-800 text-white">
        <main class="lg:px-32 px-12 transition-all duration-300">
            {{$slot}}
        </main>
        @livewire('wire-elements-modal')
        @livewireScripts
    </body>
</html>
