<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class=" navbar navbar-expand-md">
            <div class="container nav flex-row d-flex flex-nowrap justify-content-between">
                <div class="btn1 flex-grow-0">
                    <a class="back_btn thin" href="">КОЛЛЕКЦИИ</a>
                </div>
                <div class="btn2 flex-grow-0">
                    <a class="back_btn" href="">МАГАЗИН</a>
                </div>
                <div class=" logo flex-grow-0 justify-content-center">
                   <img class="logo_in" src="/img/logo.png" alt="logo">
                </div>
                <div class="btn3 flex-grow-0">
                    <a class="back_btn" href="">О НАС</a>
                </div>
                <div class="btn4 flex-grow-0">
                    <a class="back_btn" href="">КОНТАКТЫ</a>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
