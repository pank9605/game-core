@extends('layouts.app')

@section('content')
    <div class="float-left col-12 news-item-container">
        <div class="blog-header">
            <div class="container">
                <h1 class="blog-title">{{$news->title}}</h1>
                <p class="lead blog-description">Subtitulo o frase</p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-8 blog-main">

                    <div class="blog-post">
                        <p class="blog-post-meta">{{$news->date}} por <a href="#">{{$news->user->username}}</a></p>

                        <p>{{$news->introduction}}.</p>
                        <hr>
                        <img src="{{$news->news_image_featured}}" class="img-thumbnail" alt="Responsive image">
                        <hr>

                        {!!$news->description!!}

                        <hr>
                        &nbsp;
                    </div><!-- /.blog-post -->
                </div><!-- /.blog-main -->


                <!-- BARRA LATERAL -->

                <div class="col-sm-3 offset-sm-1 blog-sidebar">
                    <div class="sidebar-module sidebar-module-inset">
                        <h4>Acerca de</h4>
                        <p class="text-justify">{{$news->about}}</p>
                    </div>

                    <div class="sidebar-module">
                        <h4>Archives</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">March 2014</a></li>
                            <li><a href="#">February 2014</a></li>
                            <li><a href="#">January 2014</a></li>
                            <li><a href="#">December 2013</a></li>
                            <li><a href="#">November 2013</a></li>
                            <li><a href="#">October 2013</a></li>
                            <li><a href="#">September 2013</a></li>
                            <li><a href="#">August 2013</a></li>
                            <li><a href="#">July 2013</a></li>
                            <li><a href="#">June 2013</a></li>
                            <li><a href="#">May 2013</a></li>
                            <li><a href="#">April 2013</a></li>
                        </ol>
                    </div>
                    <div class="sidebar-module">
                        <h4>Elsewhere</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ol>
                    </div>
                </div><!-- /.blog-sidebar -->

            </div><!-- /.row -->

        </div><!-- /.container -->
    </div>

    @include('includes.footer')
@endsection
