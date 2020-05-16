@extends('layouts.app')

@section('content')
    <div class="float-left col-12 news-item-container">
        <div class="blog-header">
            <div class="container">
                <h1 class="blog-title">{{$news->title}}</h1>
                {{--<p class="lead blog-description">Subtitulo o frase</p>--}}
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 blog-main">

                    <div class="blog-post">
                        <p class="blog-post-meta">{{$news->date}} por {{$news->user->username}}</p>

                        <p>{{$news->introduction}}.</p>
                        <!-- Baner -->
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-5455720448748407"
                             data-ad-slot="8013864695"
                             data-ad-format="auto"
                             data-full-width-responsive="true"></ins>
                        <hr>
                        <img src="{{$news->news_image_featured}}" class="img-thumbnail" alt="Responsive image">
                        <hr>
                        {!!$news->description!!}
                        <hr>
                        @if($news->calification != null)
                        <div class="col-12 mt-4 mb-5 calification-content text-right">
                            <li class="row  justify-content-center text-sm-right text-center">
                                <label class="col align-self-center"><h1>Puntuación</h1></label>
                                <input type="text" name="calification" value="{{$news->calification}}" class="show-calification">
                            </li>
                        </div>
                        @endif
                    </div><!-- /.blog-post -->
                </div><!-- /.blog-main -->


                <!-- BARRA LATERAL -->

                <div class="col-lg-3 offset-sm-1 blog-sidebar">
                    @if($news->about!= null)
                        <div class="sidebar-module sidebar-module-inset">
                            <h4>Acerca de</h4>
                            <p class="text-justify">{{$news->about}}</p>
                        </div>
                    @endif
                        @if(count($related) > 0)
                            <div class="sidebar-module">
                                <h4>Relacionados</h4>
                                <ol class="list-unstyled">
                                    @foreach($related as $item)
                                        <li><a href="{{url('news/'.$item->category->name.'/'.$item->clasification->name.'/'.$item->id)}}">{{$item->title}}</a></li>
                                    @endforeach
                                </ol>
                            </div>
                        @endif
                    <div class="sidebar-module">
                        <h4>Elsewhere</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ol>
                    </div>
                        <!-- Aside Large -->
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-5455720448748407"
                             data-ad-slot="6357647029"
                             data-ad-format="auto"
                             data-full-width-responsive="true"></ins>
                </div><!-- /.blog-sidebar -->

            </div><!-- /.row -->

        </div><!-- /.container -->
    </div>

    @include('includes.footer')
@endsection
