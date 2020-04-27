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
    <script src="{{ asset('js/adminFunctions.js') }}" defer></script>
    <script src="{{asset('js/prueba.js')}}" defer></script>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/prueba.css') }}" rel="stylesheet">
</head>
<body>

<div id="app">
    <div class="wrapper d-flex align-items-stretch">

        <nav id="sidebar">
            <div class="side-header">
                <div class="img-background-container text-center">
                    <div id="image-degrade"></div>
                    <img class="img-fluid m-auto" src="{{Auth::user()->cover_image_url}}">
                </div>
                <div class="user-logo-container p-3">
                    <div class="img-porfile-container">
                        <img class="img-fluid rounded-circle" src="{{Auth::user()->porfile_image_url}}">
                        <div class="right-container">
                            <div class="data-user-right welcome-title">!Bienvenido {{Auth::user()->username}}¡</div>
                            <div class="data-user-right welcome-title">{{Auth::user()->name}} {{Auth::user()->first_name}} {{Auth::user()->last_name}}</div>
                        </div>
                    </div>
                    <div class="role-user mt-3">
                        <div class="data-role">Cargo: {{Auth::user()->role->name}} <i class="fas fa-user-tie"></i></div>
                        <div class="data-role">Correo: {{Auth::user()->email}} <i class="fas fa-envelope-open-text"></i></div>
                    </div>
                </div>

                <ul class="list-unstyled components p-2 mb-5">
                    <li>
                        <a href="#"><i class="fas fa-home"></i> Inicio</a>
                    </li>
                    @if(auth()->user()->role->name == "Fundador")
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-table"></i> Administrar</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="{{url('/admin/founder')}}"><i class="fas fa-user-tie"></i> Fundadores</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-user"></i> Administradores</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-user-edit"></i> Editores</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-pager"></i> Paginas</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            @if(auth()->user()->role->name == "Fundador" || auth()->user()->role->name == "Administrador" || auth()->user()->role->name == "Editor")
                            <li>
                                <a href="http://127.0.0.1:8000/admin"><i class="fas fa-newspaper"></i> Noticias</a>
                            </li>
                            @endif
                            @if(auth()->user()->role->name == "Fundador" || auth()->user()->role->name == "Administrador")
                            <li>
                                <a href="#"><i class="fas fa-list"></i> Categorias</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-tasks"></i> Clasificaciones</a>
                            </li>
                            @endif
                            @if(auth()->user()->role->name == "Fundador")
                            <li>
                                <a href="#"><i class="fas fa-user-tag"></i> Roles</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-ad"></i> Ads</a>
                            </li>
                            @endif
                        </ul>
                    </li>

                    <li>
                        <a href="{{url('/porfile/'.Auth::user()->id)}}"><i class="fas fa-user"></i> Perfil</a>
                    </li>

                    <li>
                        <a href="{{url(route('logout'))}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
                            Cerrar Sesión
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- NavbAr  -->
        <div id="content">
            <div class="overlay"></div>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">PDF <i class="fas fa-file-pdf"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Excel <i class="fas fa-file-excel"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container col-11">
                @yield('content')
            </div>

        </div>
    </div>

</div>

</body>
</html>
