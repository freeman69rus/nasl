<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'НАСЛЕДИЕ') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column">
<div id="app">
    <div class="bg-manchik d-flex flex-column">
        <nav class="w-100 navbar navbar-expand-md">
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
        <div class="margin-hui d-flex flex-grow-1"></div>
        <div class="ps d-flex flex-grow-0">
            <p>разработан во имя <b class="underl">тебя</b> и <b class="underl">искусства</b></p>
        </div>
        <img src="img/paper1.png" alt="paper1" class="paper-img flex-grow-0">
    </div>
    <section class="paper d-flex flex-column">
        <h1>Наследие за практичность и красоту</h1>
        <p>Все для тебя и твоего сюжета. Будь собой пока догарают звезды. Купи. Что-нибудь. Пожалуйста.</p>
{{--        <img src="img/paper1.png" alt="paper2">--}}
    </section>
    <section class="slider-main d-flex flex-column">
        <img src="img/paper1.png" alt="paper2" class="paper-img2 flex-grow-0">
        <div class="slider-wrap d-flex flex-row">
            <div class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block" src="img/manchik.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="img/manchik.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="img/manchik.jpg" alt="Third slide">
                    </div>
                </div>
            </div>
            <ul class="controls d-flex flex-column">
                <li>Худи “безопасность”</li>
                <li>футболка “death rad.”</li>
                <li>Худи “life is lie“</li>
                <li>футболка “death rad.”</li>
            </ul>
        </div>
    </section>
    <section class="carousel-film_main">
        <div id="carouselthreeslides" class="carouselthreeslides slide" data-ride="carousel">
            <div class="d-flex flex-row carousel-film carousel-inner">
                <div class="carousel-card d-flex flex-row justify-content-start carousel-item active">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <img src="img/manchik.jpg" alt="товар">
                        <h4 class="tovar-name">Худи "безопасность"</h4>
                        <p class="tovar_desc_film">прекрасное дополнение вас и вашего гардероба блабла бла</p>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-center">
                        <img src="img/manchik.jpg" alt="товар">
                        <h4 class="tovar-name">Худи "безопасность"</h4>
                        <p class="tovar_desc_film">прекрасное дополнение вас и вашего гардероба блабла бла</p>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-center">
                        <img src="img/manchik.jpg" alt="товар">
                        <h4 class="tovar-name">Худи "беdзопасность"</h4>
                        <p class="tovar_desc_film">прекрасное дополнение вас и вашего гардероба блабла бла</p>
                    </div>
                </div>
                <div class="carousel-card d-flex flex-row justify-content-start carousel-item ">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <img src="img/manchik.jpg" alt="товар">
                        <h4 class="tovar-name">Худи "безопасность"</h4>
                        <p class="tovar_desc_film">прекрасное дополнение вас и вашего гардероба блабла бла</p>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-center">
                        <img src="img/manchik.jpg" alt="товар">
                        <h4 class="tovar-name">Худи "безопасность"</h4>
                        <p class="tovar_desc_film">прекрасное дополнение вас и вашего гардероба блабла бла</p>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-center">
                        <img src="img/manchik.jpg" alt="товар">
                        <h4 class="tovar-name">Худи "безопddасность"</h4>
                        <p class="tovar_desc_film">прекрасное дополнение вас и вашего гардероба блабла бла</p>
                    </div>
                </div>
            </div>
            <div id="button_film_card" class="d-flex justify-content-center mt-4 flex-row">
                <span class="button_f_c flex-grow-2 "><a href="#">увидеть больше</a></span>
            </div>
        </div>
    </section>
    <section class="wear-line container align-content-center">
        <h1>Линейный ряд</h1>
        <p>на вкус и цвет</p>
        <div class="wear-line_main d-flex justify-content-center flex-row flex-wrap">
            <a href="#">><div class="flex-grow-1 card_main"><div class="card_main_back"><div class="wear-line-card"><span><h3>Футболки</h3><p>Все круто, очень даже хорошо, почему бы и нет</p></span></div></div></div>
                <a href=#"><div class="flex-grow-1 card_main"><div class="card_main_back"><div class="wear-line-card"><span><h3>Футболки</h3><p>Все круто, очень даже хорошо, почему бы и нет</p></span></div></div></div>
                    <a href="#"><div class="flex-grow-1 card_main"><div class="card_main_back"><div class="wear-line-card"><span><h3>Футболки</h3><p>Все круто, очень даже хорошо, почему бы и нет</p></span></div></div></div>
                        <a href="#"><div class="flex-grow-1 card_main"><div class="card_main_back"><div class="wear-line-card"><span><h3>Футболки</h3><p>Все круто, очень даже хорошо, почему бы и нет</p></span></div></div></div>

                            <a href="#"> <div class="flex-grow-1 card_main"><div class="card_main_back"><div class="wear-line-card"><span><h3>Футболки</h3><p>Все круто, очень даже хорошо, почему бы и нет</p></span></div></div></div>
                                <a href="#"> <div class="flex-grow-1 card_main"><div class="card_main_back"><div class="wear-line-card"><span><h3>Футболки</h3><p>Все круто, очень даже хорошо, почему бы и нет</p></span></div></div></div>
                                    <a href=""> <div class="flex-grow-1 card_main"><div class="card_main_back"><div class="wear-line-card"><span><h3>Футболки</h3><p>Все круто, очень даже хорошо, почему бы и нет</p></span></div></div></div>
                                        <a href=""><div class="flex-grow-1 card_main"><div class="card_main_back"><div class="wear-line-card"><span><h3>Футболки</h3><p>Все круто, очень даже хорошо, почему бы и нет</p></span></div></div></div>

        </div>
    </section>
{{--    <main class="py-4">--}}
{{--        @yield('content')--}}
{{--    </main>--}}
</div>
</body>
</html>
