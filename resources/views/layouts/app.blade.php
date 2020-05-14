<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title',config('app.name'))</title>
    <link rel="shortcut icon" href="{{asset('img/coreblack.png')}}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/styles.js') }}" defer></script>
    <script data-ad-client="ca-pub-5455720448748407" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" defer></script>
    <script src="{{asset('js/Knob/js/jquery.knob.js')}}" defer></script>
    <script src="{{ asset('js/Knob/config.js')}}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app-styles.css') }}" rel="stylesheet">
</head>
<body class="p-0 m-0">
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark position-fixed menu-container" id="menu">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img id="logo" src="{{asset('img/corewhite.png')}}" height="40" alt="Game Core">
                    Game Core
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
        @yield('content')
    </div>

@yield('js')

</body>
</html>
