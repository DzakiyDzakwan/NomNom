<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    {{-- TAILWIND CSS --}}
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>

    <div class="px-[40px] my-4">
        @livewire('button', ['label' => 'Lihat Lainnya', 'identifier' => 'btnAlert'])
    </div>

    @livewireScripts
    <script></script>
    @stack('component-script')
</body>

</html>
