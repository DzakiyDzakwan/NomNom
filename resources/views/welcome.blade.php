<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    {{-- TAILWIND CSS --}}
    @vite('resources/css/app.css')

    {{-- LIVEWIRE STYLES --}}
    @livewireStyles
</head>

<body class="antialiased">
    {{-- LIVEWIRE COMPONENTS --}}
    @livewire('test-component')




    {{-- ALPINE JS --}}
    @vite('resources/js/app.js')

    {{-- WIREUI --}}
    <wireui:scripts /> {{-- OR @wireUiScripts --}}

    {{-- LIVEWIRE --}}
    @livewireScripts
</body>

</html>