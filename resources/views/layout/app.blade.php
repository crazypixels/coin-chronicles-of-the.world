<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover,user-scalable=no">
        <title>Coin Chronicles Of The World</title>

        <meta name="Author" content="Coin Chronicles Of The World">
        <meta name="robots" content="noindex, nofollow">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>

    <body>
        <x-header />

        <main class="main-content">
            @yield('content')
        </main>

        <x-footer />
    </body>

    
    <script>
        document.querySelectorAll('.has-mega-menu > a').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const menu = this.nextElementSibling;
                menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';
            });
        });
    </script>

</html>
