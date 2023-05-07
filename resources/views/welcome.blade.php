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
    
    {{-- Kategori Card --}}
    @livewire('inline.category-card')

    {{-- Rekomendasi Resep Card --}}
    <div class="flex flex-col text-center w-full mt-12">
      <h1 class="sm:text-3xl text-2xl font-bold title-font text-gray-900">Rekomendasi Resep</h1>
    </div>
    <div class="container px-10 mt-6 mx-auto mb-12">
        <div class="flex flex-wrap -m-4">
            @livewire('inline.card')
            @livewire('inline.card')
            @livewire('inline.card')
            @livewire('inline.card')
        </div>
    </div>


    {{-- WIREUI --}}
    <wireui:scripts /> {{-- OR @wireUiScripts --}}

    {{-- ALPINE JS --}}
    @vite('resources/js/app.js')

    {{-- LIVEWIRE --}}
    @livewireScripts

    @stack('component-script')
</body>

</html>