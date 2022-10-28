<html>
<head>
    <title>Laravel Livewire Demo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @livewireStyles
</head>
<body>
<h1 class="text-3xl font-bold underline">
    Hello world!
</h1>
    {{ $slot }}
    @livewireScripts
</body>
</html>
