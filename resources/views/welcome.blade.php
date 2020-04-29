@extends('layouts.app')
@section('title', 'Bienvenido a '.config('app.name'))
@section('content')
    <!--Slider-->
    <div id="carousel1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel1" data-slide-to="1"></li>
            <li data-target="#carousel1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Nier Automata se posicion como el mejor en su Genero</h5>
                    <p>Nier Automata logra superar a uno de los mejores videojuegos de la decada ...</p>
                    <p><button class="btn btn-primary">Leer más ...</button></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/2.jfif" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!--section y aside-->
    <div class="row col-12 m-0 p-0">
        <div class="col-12 col-lg-9">
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-xl-5 mr-0 mr-xl-4">
                    <div class="card card-border">
                        <div class="card-header text-center">
                            <h3><i class="fas fa-mobile"></i> Movil</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list">
                                <li class="list-group-item d-flex justify-content-between align-items-center ">
                                    <img src="{{asset('img/nvidia.gif')}}" class="img-fluid" alt="Responsive image">
                                    Cras justo odio Cras justo odioCras justo odioCras justo justo odioCras justo...
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center ">
                                    <img src="{{asset('img/nvidia.gif')}}" class="img-fluid" alt="Responsive image">
                                    Cras justo odio Cras justo odioCras justo odioCras justo justo odioCras justo...
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center ">
                                    <img src="{{asset('img/nvidia.gif')}}" class="img-fluid" alt="Responsive image">
                                    Cras justo odio Cras justo odioCras justo odioCras justo justo odioCras justo...
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center ">
                                    <img src="{{asset('img/nvidia.gif')}}" class="img-fluid" alt="Responsive image">
                                    Cras justo odio Cras justo odioCras justo odioCras justo justo odioCras justo...
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center ">
                                    <img src="{{asset('img/nvidia.gif')}}" class="img-fluid" alt="Responsive image">
                                    Cras justo odio Cras justo odioCras justo odioCras justo justo odioCras justo...
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center ">
                                    <img src="{{asset('img/nvidia.gif')}}" class="img-fluid" alt="Responsive image">
                                    Cras justo odio Cras justo odioCras justo odioCras justo justo odioCras justo...
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center ">
                                    <img src="{{asset('img/nvidia.gif')}}" class="img-fluid" alt="Responsive image">
                                    Cras justo odio Cras justo odioCras justo odioCras justo justo odioCras justo...
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center ">
                                    <img src="{{asset('img/nvidia.gif')}}" class="img-fluid" alt="Responsive image">
                                    Cras justo odio Cras justo odioCras justo odioCras justo justo odioCras justo...
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center ">
                                    <img src="{{asset('img/nvidia.gif')}}" class="img-fluid" alt="Responsive image">
                                    Cras justo odio Cras justo odioCras justo odioCras justo justo odioCras justo...
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center ">
                                    <img src="{{asset('img/nvidia.gif')}}" class="img-fluid" alt="Responsive image">
                                    Cras justo odio Cras justo odioCras justo odioCras justo justo odioCras justo...
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-xl-5">
                    <div class="card card-border ml-0 ml-xl-4 mt-5 mt-xl-0">
                        <div class="card-header text-center">
                            <h3><i class="fas fa-newspaper"></i> Reseñas</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list">
                                <li class="list-group-item d-flex justify-content-between align-items-center ">
                                    <img src="{{asset('img/tenor.gif')}}" class="img-fluid" alt="Responsive image">
                                    Cras justo odio Cras justo odioCras justo odioCras justo justo odioCras justo...
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center ">
                                    <img src="{{asset('img/tenor.gif')}}" class="img-fluid" alt="Responsive image">
                                    Cras justo odio Cras justo odioCras justo odioCras justo justo odioCras justo...
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center ">
                                    <img src="{{asset('img/tenor.gif')}}" class="img-fluid" alt="Responsive image">
                                    Cras justo odio Cras justo odioCras justo odioCras justo justo odioCras justo...
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center ">
                                    <img src="{{asset('img/tenor.gif')}}" class="img-fluid" alt="Responsive image">
                                    Cras justo odio Cras justo odioCras justo odioCras justo justo odioCras justo...
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center ">
                                    <img src="{{asset('img/tenor.gif')}}" class="img-fluid" alt="Responsive image">
                                    Cras justo odio Cras justo odioCras justo odioCras justo justo odioCras justo...
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center ">
                                    <img src="{{asset('img/tenor.gif')}}" class="img-fluid" alt="Responsive image">
                                    Cras justo odio Cras justo odioCras justo odioCras justo justo odioCras justo...
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center ">
                                    <img src="{{asset('img/tenor.gif')}}" class="img-fluid" alt="Responsive image">
                                    Cras justo odio Cras justo odioCras justo odioCras justo justo odioCras justo...
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center ">
                                    <img src="{{asset('img/tenor.gif')}}" class="img-fluid" alt="Responsive image">
                                    Cras justo odio Cras justo odioCras justo odioCras justo justo odioCras justo...
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center ">
                                    <img src="{{asset('img/tenor.gif')}}" class="img-fluid" alt="Responsive image">
                                    Cras justo odio Cras justo odioCras justo odioCras justo justo odioCras justo...
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center ">
                                    <img src="{{asset('img/tenor.gif')}}" class="img-fluid" alt="Responsive image">
                                    Cras justo odio Cras justo odioCras justo odioCras justo justo odioCras justo...
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <div id="carousel2" class="carousel slide slider-border col-12 col-xl-11  m-auto" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel2" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel2" data-slide-to="1"></li>
                        <li data-target="#carousel2" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/2.jfif" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/3.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="card-body col-11 col-lg-11 justify-content-center" id="search-content">
                <form class="form-inline justify-content-center">
                    <i class="fas fa-search"></i><input type="text" class="form-control ml-3 col-11" id="search"  placeholder="Buscar...">
                </form>
            </div>


            @foreach($news as $item)
                <div class="row news-container col-11">
                <div class="col-xl-4 align-self-center">
                    <img src="{{$item->news_image_feature}}">
                </div>
                <div class="col-xl-8 justify-content-center">
                    <div class="news-title text-center mt-2">
                        {{$item->title}}
                    </div>
                    <hr>
                    <div class="news-description text-justify">
                        {!!$item->introduction!!}
                    </div>

                    <div class="justify-content-center col-xl-12 row p-0 m-0 mt-3">
                        <div class="col-6 news-date p-0">
                            <ul>
                                <li>
                                    Por: <a href="">{{$item->user->name}} </a><i class="fas fa-user-tie"></i>
                                </li>
                                <li>
                                    Hora: {{$item->date}} <i class="fas fa-clock"></i>
                                </li>
                                <li>
                                    Fecha: {{$item->date}}
                                    <i class="fas fa-calendar-alt"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 text-center align-self-center">
                            <button class="btn btn-primary col-12"><i class="fas fa-plus"></i> Leer más...</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <nav aria-label="Page navigation example">
                <ul class="pagination pagination-lg justify-content-center">
                    {{$news->links()}}
                </ul>
            </nav>
        </div>
        @include('includes.aside')
    </div>
    @include('includes.footer')
@endsection


