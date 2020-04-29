@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header bg-dark text-light">
        <div class="row">
            <div class="col-6">
                <h4 class="font-weight-bold">Noticias</h4>
            </div>
            <div class="col-6">
                <a href="{{url('/news/create')}}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Agregar</a>
            </div>
        </div>
    </div>
    @if (session('notification'))
    <div class="alert alert-success" role="alert">
        {{ session('notification') }}
    </div>
    @endif
    <div class="card-body">
        <table class="table text-center table-responsive">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"><i class="fas fa-signature"></i> Titulo</th>
                <th scope="col"><i class="fas fa-pencil-alt"></i> Descripción</th>
                <th scope="col"><i class="fas fa-user-edit"></i> Autor</th>
                <th scope="col"><i class="fas fa-calendar-alt"></i> Fecha de Publicación</th>
                <th scope="col"><i class="fas fa-star"></i> Noticia Destacada</th>
                <th scope="col"><i class="fas fa-th-list"></i> Categoria</th>
                <th scope="col"><i class="fas fa-list"></i> Clasificación</th>
                <th scope="col"><i class="fas fa-images"></i> Imagenes de la Noticia</th>
                <th scope="col"><i class="fas fa-pen-alt"></i> Editar</th>
                <th scope="col"><i class="fas fa-trash-alt"></i> Eliminar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($news as $note)
            <tr>
                <th>{{$note->id}}</th>
                <td class="text-left">{{$note->title}}</td>
                <td class="text-justify">{!! $note->introduction !!}</td>
                <td>{{$note->user->username}}</td>
                <td>{{$note->date}}</td>
                <td>
                    @if($note->featured)
                        <i class="fas fa-star text-warning"></i>
                    @else
                        <i class="far fa-star"></i>
                    @endif

                </td>
                <td>{{$note->category}}</td>
                <td>{{$note->clasification}}</td>
                <td><button class="btn btn-warning"><i class="fas fa-image"></i></button></td>
                <td><button class="btn btn-secondary"><i class="fas fa-pencil-alt"></i></button></td>
                <td><button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    <div class="card-footer bg-dark text-light">

        <nav aria-label="Page navigation example">
            <ul class="pagination float-left justify-content-start">
                Total de noticias: {{$totalNews}}
            </ul>
            <ul class="pagination justify-content-end">
                {{$news->links()}}
            </ul>
        </nav>
    </div>
</div>
@endsection
