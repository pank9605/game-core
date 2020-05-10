@extends('layouts.app')
@section('title', 'Bienvenido a '.config('app.name'))


@section('content')
    <!--Slider-->
    <div id="carousel1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @for($i=0; $i < $featuredNews->count(); $i++)
                @if($i==0)
                    <li data-target="#carousel1" data-slide-to="{{$i}}" class="active"></li>
                @else
                    <li data-target="#carousel1" data-slide-to="{{$i}}"></li>
                @endif
            @endfor
        </ol>
        <div class="carousel-inner">
            @foreach($featuredNews as $key=>$item)
                {{$active=""}}
                @if($key ==0)
                    {{$active= "active"}}
                @endif
                <div class="carousel-item carousel-item-principal {{$active}}">
                    <img class="d-block w-100" src="{{$item->news_image_featured}}" alt="First slide">
                    <div class="carousel-caption">
                        <div class="title">{{$item->title}}</div>
                        <p>{{$item->news_introduction}}</p>
                        <p><a href="{{url('/news/'.$item->category->name.'/'.$item->clasification->name.'/'.$item->id)}}" class="btn btn-primary">Leer más ...</a></p>
                    </div>
                </div>
            @endforeach
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
                                @foreach($mobileSection as $mobile)
                                <li class="list-group-item d-flex justify-content-between align-items-center ">
                                    <img src="{{$mobile->news_image_featured}}" class="img-fluid" alt="{{$mobile->title}}">
                                    <a class="item" href="{{url('/news/'.$mobile->category->name.'/'.$mobile->clasification->name.'/'.$mobile->id)}}">
                                    {{$mobile->mobile_introduction}}
                                    </a>
                                </li>
                                @endforeach
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
                                @foreach($reviewSection as $review)
                                <li class="list-group-item d-flex align-items-center ">
                                    @if($review->calification > 79)
                                        <div class="calification"><input type="text" value="{{$review->calification}}" class="dial" data-fgColor="#28a745"></div>
                                    @elseif($review->calification>49)
                                        <div class="calification"><input type="text" value="{{$review->calification}}" class="dial" data-fgColor="#ffc107"></div>
                                    @else
                                        <div class="calification"><input type="text" value="{{$review->calification}}" class="dial" data-fgColor="#dc3545"></div>
                                    @endif
                                        <a href="{{url('/news/'.$review->category->name.'/'.$review->clasification->name.'/'.$review->id)}}">
                                        <h5>{{$review->title}}</h5>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <div id="carousel2" class="carousel slide slider-border col-12 col-xl-11  m-auto" data-ride="carousel">
                    <div id="carousel1" class="carousel slide" data-ride="carousel2">
                        <ol class="carousel-indicators">
                            @for($i=0; $i < $featuredPcMobile->count(); $i++)
                                @if($i==0)
                                    <li data-target="#carousel2" data-slide-to="{{$i}}" class="active"></li>
                                @else
                                    <li data-target="#carousel2" data-slide-to="{{$i}}"></li>
                                @endif
                            @endfor
                        </ol>
                        <div class="carousel-inner">
                            @foreach($featuredPcMobile as $key=>$item)
                                {{$active=""}}
                                @if($key ==0)
                                    {{$active= "active"}}
                                @endif
                                <div class="carousel-item carousel-item-principal {{$active}}">
                                    <img class="d-block w-100" src="{{$item->news_image_featured}}" alt="First slide">
                                    <div class="carousel-caption">
                                        <div class="title">{{$item->title}}</div>
                                        <p>{{$item->news_introduction}}</p>
                                        <p><a href="{{url('/news/'.$item->category->name.'/'.$item->clasification->name.'/'.$item->id)}}" class="btn btn-primary">Leer más ...</a></p>
                                    </div>
                                </div>
                            @endforeach
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
            </div>



            @foreach($news as $item)
                <div class="row news-container col-11">
                <div class="col-xl-4 align-self-center">
                    <img src="{{$item->news_image_featured}}">
                </div>
                <div class="col-xl-8 justify-content-center">
                    <div class="news-title text-center mt-2">
                        {{$item->title}}
                    </div>
                    <hr>
                    <div class="news-description text-justify">
                        {!!$item->news_introduction!!}
                    </div>

                    <div class="justify-content-center col-xl-12 row p-0 m-0 mt-3">
                        <div class="col-6 news-date p-0">
                            <ul>
                                <li class="author">
                                    Por: <a href="{{url('/author/'.$item->user->id)}}">{{$item->user->name}} </a><i class="fas fa-user-tie"></i>
                                </li>
                                <li>
                                    Hora: {{substr($item->time,0,10)}} <i class="fas fa-clock"></i>
                                </li>
                                <li>
                                    Fecha: {{substr($item->time,12,7)}}
                                    <i class="fas fa-calendar-alt"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 text-center align-self-center">
                            <a href="{{url('/news/'.$item->category->name.'/'.$item->clasification->name.'/'.$item->id)}}" class="btn btn-primary col-12"><i class="fas fa-plus"></i> Leer más...</a>
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


