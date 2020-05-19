@extends('layouts.admin')
@section('img-background')
    <div class="page-header header-filter" data-parallax="true" style="background-image:url('{{asset('img/xbox1.jpg')}}');"></div>
@endsection
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="card-text">
                    <h4 class="card-title float-left">Editores</h4>
                    <p class="category float-right m-0"><a href="{{url('staff/editor/create')}}" class="btn btn-round btn-secondary float-right"><i class="fas fa-plus"></i> Agregar</a></p>
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

                <table class="table text-center table-bordered table-responsive table-responsive-sm table-responsive-md table-responsive-xl table-responsive-lg">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">A. Paterno</th>
                        <th scope="col">A. Materno</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Email</th>
                        <th scope="col">Imagene de Portada</th>
                        <th scope="col">Imagene de Perfil</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($editors as $editor)
                        <tr>
                            <th scope="row">{{$editor->id}}</th>
                            <td>{{$editor->username}}</td>
                            <td>{{$editor->name}}</td>
                            <td>{{$editor->first_name}}</td>
                            <td>{{$editor->last_name}}</td>
                            <td>{{$editor->age}}</td>
                            <td>{{$editor->gender}}</td>
                            <td>{{$editor->email}}</td>
                            <td><img class="images-table" src="{{$editor->cover_image_url}}"></td>
                            <td><img class="images-table" src="{{$editor->porfile_image_url}}"></td>
                            <td class="text-left">
                                <b>Calle:</b> {{$editor->address->street}} <b>#</b>{{$editor->address->outdoor_number}}
                                <br><b>Colonia:</b> {{$editor->address->colony}}, {{$editor->address->city}}
                                <br><b>N° Interior :</b>{{$editor->address->interior_number}}, <b>C.P: </b> {{$editor->address->post_code}}
                                <br><b>Telefono:</b> {{$editor->address->phone}}
                                <br><b>Telefono 2:</b> {{$editor->address->cellphone}}
                            </td>
                            <td>
                                <form method="GET" action="{{url('staff/editor/edit/'.$editor->id)}}">
                                    {{csrf_field()}}
                                    <button class="btn btn-info"><i class="fas fa-edit"></i></button>
                                </form>
                            </td>
                            <td>
                                <form method="POST" action="{{url('staff/editor/'.$editor->id.'/delete')}}" onsubmit="return validateDelete(this);">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button type="submit" id="delete_founder" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <div class="footer-brand text-muted">
                <ul class=" float-left justify-content-start">
                    Total de Editores: {{$totalEditors}}
                </ul>
                <ul class="float-right justify-content-end">
                    {{$editors->links()}}
                </ul>
            </div>
        </div>
    </div>

@endsection
