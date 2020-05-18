<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- General Tags -->
    <title>@yield('title',config('app.name'))</title>
    <meta name="description" content="@yield('page-description')"/>
    <meta name="keywords" content="game, core, gamers, playstation, xbox, nintendo,
    pc, móvil, videojuegos, noticas, reseñas, podcast, pank9605, unboxings"/>
    <meta name="author" content="Eduardo Chávez Zúñiga" />
    <meta name="copyright" content="Game-Core" />

    <link rel="shortcut icon" href="{{asset('img/coreblack.png')}}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/styles.js') }}" defer></script>
    <script src="{{asset('js/Knob/js/jquery.knob.js')}}" defer></script>
    <script src="{{ asset('js/Knob/config.js')}}" defer></script>

    <!-- google -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script data-ad-client="ca-pub-5455720448748407" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <script defer async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

@yield('headerJs')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app-styles.css') }}" rel="stylesheet">


    <!-- Facebook -->
    <meta property="og:title" content="@yield('page-title')" />
    <meta property="og:description" content="@yield('page-description')" />
    <meta property="og:image" content="@yield('page-image')" />
    <meta property="og:url" content="@yield('url')" />
    <meta property="fb:app_id" content="260127125344466" />
    <meta property="og:type" content="article" />

</head>
<body class="p-0 m-0">
<div id="fb-root"></div>


<div id="app">
    <nav class="navbar navbar-expand-lg navbar-dark position-fixed menu-container" id="menu">
        <a class="navbar-brand" href="{{url('/')}}">
            <img id="logo" src="{{asset('img/corewhite.png')}}" height="40" alt="Game Core">
            <b>Game Core</b>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}"><i class="fas fa-home"></i> INICIO <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-list"></i> CATEGORIAS
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($categories as $category)
                            <a class="dropdown-item" href="{{url('/news/'.$category->name)}}"><i class="{{$category->icon}}"></i>
                                {{$category->name}}</a>
                        @endforeach
                    </div>
                </li>
                @foreach($clasifications as $clasification)
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/news/'.$clasification->name)}}"><i class="{{$clasification->icon}}"></i> {{$clasification->name}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>



    <!--==========================
    Social Section
    ============================-->
    <section id="social">
        <ul>
            <li class="fb wow slideInLeft" data-wow-delay="0s">
                <a href="https://www.facebook.com/GameCore-101570291364601/?modal=admin_todo_tour" target="_blank"><i class="fab fa-facebook fa-lg"></i></a>
            </li>
            <li class="tw wow slideInLeft" data-wow-delay="0.5s">
                <a href=""><i class="fab fa-twitter fa-lg"></i></a>
            </li>
            <li class="ig wow slideInLeft" data-wow-delay="1.5s">
                <a href=""><i class="fab fa-instagram fa-lg"></i></a>
            </li>
        </ul>
    </section>


    {{--<section id="search">
        <ul>
            <li class="fb wow slideInLeft" data-wow-delay="0s">
                <div class="wrapper justify-content-center text-center">
                    <div class="search-container">
                        <form method="POST" action="">
                            <input type="text" class="input" placeholder="Search">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </form>

                    </div>
                </div>
            </li>
        </ul>
    </section>--}}



    @yield('content')
</div>

@yield('js')
<script defer>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v7.0&appId=260127125344466&autoLogAppEvents=1"></script>

</body>
</html>
