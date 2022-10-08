<!doctype html>
<head>
    <title>WireChess</title>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    {{ $slot }}

    @livewireScripts
</body>
