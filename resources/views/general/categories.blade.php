@extends('layouts.app')
@section('title', 'Bienvenido a '.config('app.name'))

@section('content')


    <!--section y aside-->
    <div class="row principal-container padding-top">

        <div class=" col-12 col-xl-9 p-0">
            @foreach($news as $item)
                <div class="row news-container mt-5">
                    <div class="col-xl-5 align-self-center p-0">
                        <img src="{{$item->news_image_featured}}">
                    </div>
                    <div class="col-xl-7 justify-content-center">
                        <div class="news-title text-center mt-3 mt-xl-2">
                            {{$item->title}}
                        </div>
                        <hr>
                        <div class="news-description text-justify">
                            {!!$item->news_introduction!!}
                        </div>

                        <div class="justify-content-center col-xl-12 row p-0 m-0 mt-3 mb-0">
                            <div class="col-6 news-date p-0">
                                <ul>
                                    <li class="author">
                                        <small>{{--<a href="{{url('/author/'.$item->user->id)}}">{{$item->user->username}} </a>--}}{{$item->user->username}} <i class="fas fa-user-tie"></i></small>
                                    </li>
                                    <li>
                                        <small>{{substr($item->date,0,10)}} <i class="fas fa-calendar-alt"></i></small> |  <small>
                                            {{substr($item->date,11,8)}} <i class="fas fa-clock"></i>
                                        </small>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 text-center align-self-center">
                                <a href="{{url('/news/'.$item->category->name.'/'.$item->clasification->name.'/'.$item->id)}}" class="btn btn-primary col-12 col-xl-8 readnews">Leer <i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        @include('includes.aside')


        <nav class="mt-4 col-12" aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                {{$news->links()}}
            </ul>
        </nav>
    </div>
    @include('includes.footer')
@endsection
