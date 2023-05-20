<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- <title>{{ env('APP_NAME') }}</title> --}}
    <title>{{ $title }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/x-icon">

    {{-- TAILWIND CSS --}}
    @vite('resources/css/app.css')

    {{-- LIVEWIRE STYLES --}}
    @livewireStyles
</head>

<body class="antialiased bg-plain overflow-x-hidden">

    {{ $slot }}

    {{-- WIREUI --}}
    <wireui:scripts /> {{-- OR @wireUiScripts --}}

    {{-- ALPINE JS --}}
    @vite('resources/js/app.js')

    {{-- LIVEWIRE --}}
    @livewireScripts

    @stack('component-script')
</body>

</html>
