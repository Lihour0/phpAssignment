<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Course</title>
        @vite ('resources/css/app.css')
        <x-nav />
    </head>
    <body class="bg-zinc-800 text-white">
        <main class="lg:px-32 px-12 transition-all duration-300">
            {{$slot}}
        </main>
    </body>
</html>
