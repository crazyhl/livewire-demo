<html>
<head>
    <title>Laravel Livewire Demo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    <div class="font-mono container mx-auto px-4">
    {{ $slot }}
    </div>
    @livewireScripts
</body>
</html>
