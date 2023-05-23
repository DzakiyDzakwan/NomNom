<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf_token" value="{{ csrf_token() }}" />

    {{-- <title>{{ env('APP_NAME') }}</title> --}}
    <title>{{ $title }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/x-icon">

    {{-- TAILWIND CSS --}}
    @vite('resources/css/app.css')

    {{-- LIVEWIRE STYLES --}}
    @livewireStyles
    <style>
        .custom-loader {
            width:25px;
            height:6px;
            background: 
                radial-gradient(circle closest-side,#FFB03E 90%,#0000) 0%   50%,
                radial-gradient(circle closest-side,#FFB03E 90%,#0000) 50%  50%,
                radial-gradient(circle closest-side,#FFB03E 90%,#0000) 100% 50%;
            background-size:calc(100%/3) 100%;
            background-repeat: no-repeat;
            animation:d7 1s infinite linear;
        }
            @keyframes d7 {
                33%{background-size:calc(100%/3) 0%  ,calc(100%/3) 100%,calc(100%/3) 100%}
                50%{background-size:calc(100%/3) 100%,calc(100%/3) 0%  ,calc(100%/3) 100%}
                66%{background-size:calc(100%/3) 100%,calc(100%/3) 100%,calc(100%/3) 0%  }
        }
    </style>
</head>

<body class="antialiased bg-plain overflow-x-hidden" x-data :class="{'overflow-y-hidden' : $store.body.dim}">

    {{ $slot }}

    {{-- FOOTER --}}
    <x-footer></x-footer>

    {{-- WIREUI --}}
    <wireui:scripts /> {{-- OR @wireUiScripts --}}

    {{-- ALPINE JS --}}
    @vite('resources/js/app.js')

    {{-- LIVEWIRE --}}
    @livewireScripts

    {{-- COMPONENTS --}}
    @stack('component-script')

    {{-- BODY STORE --}}
    <script>
        Livewire.onPageExpired((response, message) => 
        {
            location.reload()
        })

        document.addEventListener('alpine:init', () => 
        {
            Alpine.store(`body`,
            {
                dim: false,
            })
        })
    </script>
</body>

</html>