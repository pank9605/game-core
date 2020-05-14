@extends('layouts.admin')
@section('img-background')
    <div class="page-header header-filter" data-parallax="true" style="background-image:url('{{asset('img/xbox1.jpg')}}');"></div>
@endsection
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="card-text">
                    <h4 class="card-title float-left">Fundadores</h4>
                    <p class="category float-right m-0"><a href="{{url('staff/founder/create')}}" class="btn btn-round btn-secondary float-right"><i class="fas fa-plus"></i> Agregar</a></p>
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
                        @foreach($founders as $founder)
                            <tr>
                                <th scope="row">{{$founder->id}}</th>
                                <td>{{$founder->username}}</td>
                                <td>{{$founder->name}}</td>
                                <td>{{$founder->first_name}}</td>
                                <td>{{$founder->last_name}}</td>
                                <td>{{$founder->age}}</td>
                                <td>{{$founder->gender}}</td>
                                <td>{{$founder->email}}</td>
                                <td><img class="images-table" src="{{$founder->cover_image_url}}"></td>
                                <td><img class="images-table" src="{{$founder->porfile_image_url}}"></td>
                                <td class="text-left">
                                    <b>Calle:</b> {{$founder->address->street}} <b>#</b>{{$founder->address->outdoor_number}}
                                    <br><b>Colonia:</b> {{$founder->address->colony}}, {{$founder->address->city}}
                                    <br><b>N° Interior :</b>{{$founder->address->interior_number}}, <b>C.P: </b> {{$founder->address->post_code}}
                                    <br><b>Telefono:</b> {{$founder->address->phone}}
                                    <br><b>Telefono 2:</b> {{$founder->address->cellphone}}
                                </td>
                                <td>
                                    <form method="GET" action="{{url('staff/founder/edit/'.$founder->id)}}">
                                        {{csrf_field()}}
                                        <button class="btn btn-info"><i class="fas fa-edit"></i></button>
                                    </form>
                                </td>
                                <td>
                                    <form method="POST" action="{{url('staff/founder/'.$founder->id.'/delete')}}" onsubmit="return validateDelete(this);">
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
                    Total de Fundadores: {{$totalFounders}}
                </ul>
                <ul class="float-right justify-content-end">
                    {{$founders->links()}}
                </ul>
            </div>
        </div>
    </div>


@endsection



