@extends('layouts.app')

@section('content')
    <div class="row col-12 m-0 padding-top">
        <div class="col-12 col-lg-9">

            <div class="card-body col-11 col-lg-11 justify-content-center" id="search-content">
                <form class="form-inline justify-content-center">
                    <i class="fas fa-search"></i><input type="text" class="form-control ml-3 col-11" id="search"  placeholder="Buscar...">
                </form>
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
                            {!!$item->introduction!!}
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
