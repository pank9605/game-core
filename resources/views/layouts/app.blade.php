<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title',config('app.name'))</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/styles.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app-styles.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark position-fixed col-md-12 menu-container" id="menu">
                <a class="navbar-brand" href="#">
                    <img id="logo" src="/img/LogoClaro.png" height="40" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fas fa-home"></i> INICIO <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-list"></i> CATEGORIAS
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#"><i class="fab fa-playstation"></i> PLAYSTATION</a>
                                <a class="dropdown-item" href="#"><i class="fab fa-xbox"></i> XBOX</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-gamepad"></i> NINTENDO</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fas fa-desktop"></i> PC</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-mobile-alt"></i>MOVIL</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-users"></i>MULTICONSOLA</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="far fa-newspaper"></i> RESEÑAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-soundcloud"></i> PODCAST</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-box"></i> UNBOXINGS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-heart"></i> ESPECIALES</a>
                        </li>
                    </ul>
                </div>
            </nav>
        @yield('content')
    </div>
</body>
</html>
