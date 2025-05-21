<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover,user-scalable=no">
        <title>Coin Chronicles Of The World</title>

        <meta name="Author" content="Coin Chronicles Of The World">
        <meta name="robots" content="noindex, nofollow">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>

    <body>
        <x-header />

        <main class="main-content">
            @yield('content')
        </main>

        <x-footer />
    </body>

</html>
