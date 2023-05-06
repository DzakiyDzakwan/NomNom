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
    {{-- @livewire('inline.modal') --}}
    {{ $slot }}
    @livewire('inline.filter-button')
    @livewire('inline.card')


    {{-- WIREUI --}}
    <wireui:scripts /> {{-- OR @wireUiScripts --}}

    {{-- ALPINE JS --}}
    @vite('resources/js/app.js')

    {{-- LIVEWIRE --}}
    @livewireScripts

    @stack('component-script')
</body>

</html>