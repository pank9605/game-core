@extends('layouts.admin')
@section('img-background')
    <div class="page-header header-filter" data-parallax="true" style="background-image:url('{{asset('img/xbox2.jpg')}}');"></div>
@endsection
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="card-text">
                    <h4 class="card-title">Log de Noticias</h4>
                </div>
            </div>
            <div class="card-body">

                @if (session('notification'))
                    <div class="alert alert-success" role="alert">
                        {{ session('notification') }}
                    </div>
                @elseif(session('notificationFaill'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('notificationFaill') }}
                    </div>
                @endif

                <table class="table text-center table-bordered table-responsive-lg">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"><i class="fas fa-signature"></i> Titulo</th>
                        <th scope="col"><i class="fas fa-quote-left"></i> Introducción</th>
                        <th scope="col"><i class="fas fa-user-edit"></i> Autor</th>
                        <th scope="col"><i class="fas fa-calendar-alt"></i> Fecha de Publicación</th>
                        <th scope="col"><i class="fas fa-star"></i> Noticia Destacada</th>
                        <th scope="col"><i class="fas fa-th-list"></i> Categoria</th>
                        <th scope="col"><i class="fas fa-list"></i> Clasificación</th>
                        <th scope="col"><i class="fas fa-images"></i> Imagenes</th>
                        <th scope="col"><i class="fas fa-undo"></i> Restaurar</th>
                        <th scope="col"><i class="fas fa-trash-alt"></i> <!--<img src="">--> Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($news as $item)
                        <tr>
                            <th>{{$item->id}}</th>
                            <td class="text-left">{{$item->title}}</td>
                            <td style="max-width: 350px;" class="text-justify">{!!$item->news_introduction!!}</td>
                            <td>{{$item->user->username}}</td>
                            <td>{{$item->date}}</td>
                            <td>

                                @if($item->featured)
                                    <i class="fas fa-newspaper text-warning"></i>
                                @else
                                    <i class="fas fa-newspaper"></i>
                                @endif

                            </td>
                            <td>{{$item->category_name}}</td>
                            <td>{{$item->clasification_name}}</td>
                            <td><a href="{{url('staff/news/'.$item->id.'/images')}}" class="btn btn-warning"><i class="fas fa-image"></i></a></td>
                            <td>
                                <form method = "POST" action="{{url('staff/founder/logs/news/'.$item->id.'/restore')}}">
                                    @csrf
                                    <button type="submit" class="btn btn-info"><i class="fas fa-undo"></i></button>
                                </form>
                            </td>

                            <td>
                                <form method="POST" action="{{url('staff/founder/logs/news/'.$item->id.'/delete')}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <div class="footer-brand text-muted">
                <ul class=" float-left justify-content-start">
                    Total de Noticias Eliminadas: {{$totalDeleted}}
                </ul>
                <ul class="float-right justify-content-end">
                    {{$news->links()}}
                </ul>
            </div>
        </div>
    </div>

@endsection
