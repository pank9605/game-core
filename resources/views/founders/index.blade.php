@section('title,Hola')
@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <h4 class="font-weight-bold">Fundadores</h4>
                </div>
                <div class="col-6">
                    <a href="{{url('/admin/founder/create')}}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Agregar</a>
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
                        <td><img class="img-fluid" src="{{$founder->cover_image_url}}" width="50" height="50"></td>
                        <td><img class="img-fluid" src="{{$founder->porfile_image_url}}" width="50" height="50"></td>
                        <td class="text-left">
                            <b>Calle:</b> {{$founder->address->street}} <b>#</b>{{$founder->address->outdoor_number}}
                            <br><b>Colonia:</b> {{$founder->address->colony}}, {{$founder->address->city}}
                            <br><b>N° Interior :</b>{{$founder->address->interior_number}}, <b>C.P: </b> {{$founder->address->post_code}}
                            <br><b>Telefono:</b> {{$founder->address->phone}}
                            <br><b>Telefono 2:</b> {{$founder->address->cellphone}}
                        </td>
                        <td>
                            <form method="GET" action="{{url('/admin/founder/edit/'.$founder->id)}}">
                                {{csrf_field()}}
                                <button class="btn btn-secondary"><i class="fas fa-edit"></i></button>
                            </form>
                        </td>
                        <td>
                            <form method="POST" action="{{url('/admin/founder/'.$founder->id.'/delete')}}" onsubmit="return validateDelete(this);">
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
        <div class="card-footer">

            <nav aria-label="Page navigation example">

                <ul class="pagination justify-content-end">
                    {{$founders->links()}}
                </ul>
            </nav>
        </div>
    </div>

@endsection



