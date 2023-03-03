<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>

<body>
    @if (auth()->user())
        ada yang login
    @else
        udah keluar
    @endif
    {{-- {{ auth()->user() }} --}}
    <h1 class="text-3xl text-red-700 text-center font-bold underline">
        Hello world!
    </h1>
</body>

</html>
