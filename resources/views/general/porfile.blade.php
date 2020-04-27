@extends('layouts.admin')
@section('content')
    <div class="card border-primary">
        <div class="card-header">
            <h3>Editar Perfil</h3>
        </div>
        @if (session('notification'))
            <div class="alert alert-success" role="alert">
                {{ session('notification') }}
            </div>
        @endif
        <form method="POST" action="{{url('/porfile/edit/'.$user->id)}}" enctype="multipart/form-data">
            <div class="card-body">
                {{csrf_field()}}

                <div class="form-row mt-5">
                    <div class="form-row col-12 col-xl-4 justify-content-center align-items-center">
                        <div class="card text-center">
                            <div class="card-header">
                                Imagen Actual de Perfil
                            </div>
                                <div class="card-body">
                                    <img class="img-fluid" src="{{$user->porfile_image_url}}" width="90" height="90">
                                </div>
                            <div class="card-footer">
                                <input type="file" class="form-control" name="porfile_image" >
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xl-8 form-row mt-3">
                        <div class="form-group input-group col-12 col-xl-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="username" id="cellphone" value="{{old('username',$user->username)}}" placeholder="Usuario">
                        </div>

                        <div class="form-group input-group col-12 col-xl-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="name" id="" value="{{old('name',$user->name)}}" placeholder="Nombre">
                        </div>

                        <div class="form-group input-group col-12 col-xl-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="first_name" id="" value="{{old('first_name',$user->first_name)}}" placeholder="Apellido Paterno">
                        </div>

                        <div class="form-group input-group col-12 col-xl-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="last_name" id="" value="{{old('last_name',$user->last_name)}}" placeholder="Apellido Materno">
                        </div>

                        <div class="form-group input-group col-12 col-xl-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light"><i class="fas fa-birthday-cake"></i></span>
                            </div>
                            <input type="number" min="18" max="60" class="form-control" name="age" id="" value="{{old('age',$user->age)}}" placeholder="Edad">
                        </div>

                        <div class="form-group input-group col-12 col-xl-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light"><i class="fas fa-venus-mars"></i></span>
                            </div>
                            <select name="gender" class="col-12 form-control">
                                <option><i class="fas fa-user"></i> Seleccione se Genero...</option>
                                <option>Masculino</option>
                                <option>Femenino</option>
                                <option>Indefinido</option>
                            </select>
                        </div>

                        <div class="form-group input-group col-12 col-xl-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light"><i class="fas fa-envelope-open-text"></i></span>
                            </div>
                            <input type="email" class="form-control" name="email" id="" value="{{old('email',$user->email)}}" placeholder="Correo">
                        </div>

                        <div class="form-group input-group col-12 col-xl-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" name="password" id="" placeholder="Contraseña">
                        </div>

                        <div class="form-group input-group col-12 col-xl-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" name="confirm_password" id="" placeholder="Confirmar Contraseña">
                        </div>

                        <div class="form-group input-group col-12 col-xl-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light"><i class="fas fa-user-tie"></i></span>
                            </div>
                            <input type="text" class="form-control" value="{{$user->role->name}}" disabled>
                        </div>
                    </div>
                </div>

                <div class="form-row mt-5">
                    <div class="col-12 col-xl-8 form-row mt-3">
                        <div class="form-group input-group col-12 col-xl-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light"><i class="fas fa-location-arrow"></i></span>
                            </div>
                            <input type="text" class="form-control" name="street" id=""  value="{{old('street',$user->address->street)}}" placeholder="Calle">
                        </div>

                        <div class="form-group input-group col-12 col-xl-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light"><i class="fas fa-door-closed"></i></span>
                            </div>
                            <input type="number" min="1" class="form-control" name="outdoor_number" id="" value="{{old('outdoor_number',$user->address->outdoor_number)}}" placeholder="Numero Exterior">
                        </div>

                        <div class="form-group input-group col-12 col-xl-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light"><i class="fas fa-door-open"></i></span>
                            </div>
                            <input type="number" min="0" class="form-control" name="interior_number" id="interior_number" value="{{old('interior_number',$user->address->interior_number)}}" placeholder="Numero Interior">
                        </div>

                        <div class="form-group input-group col-12 col-xl-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light"><i class="fas fa-map-marked-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" name="colony" id="colony" value="{{old('colony',$user->address->colony)}}" placeholder="Colonia">
                        </div>

                        <div class="form-group input-group col-12 col-xl-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light"><i class="fas fa-city"></i></span>
                            </div>
                            <input type="text" class="form-control" name="city" id="city" value="{{old('city',$user->address->city)}}" placeholder="Ciudad / Municipio">
                        </div>

                        <div class="form-group input-group col-12 col-xl-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="number" class="form-control" name="post_code" id="post_code" value="{{old('post_code',$user->address->post_code)}}" placeholder="Codigo Postal">
                        </div>

                        <div class="form-group input-group col-12 col-xl-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light"><i class="fas fa-mobile-alt"></i></span>
                            </div>
                            <input type="tel" class="form-control" name="cellphone" id="cellphone" value="{{old('cellphone',$user->address->cellphone)}}" placeholder="Celular">
                        </div>

                        <div class="form-group input-group col-12 col-xl-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="tel" class="form-control" name="phone" id="phone" value="{{old('phone',$user->address->phone)}}" placeholder="Telefono">
                        </div>


                    </div>

                    <div class="form-row col-12 col-xl-4 justify-content-center align-items-center">
                        <div class="card text-center">
                            <div class="card-header">
                                Imagen Actual de Postada
                            </div>
                            <div class="card-body">
                                <img class="img-fluid" src="{{$user->cover_image_url}}" width="80" height="80">
                            </div>
                            <div class="card-footer">
                                <input type="file" class="form-control" name="cover_image" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary col-3">Guardar Cambios</button>
                </div>
        </form>
    </div>
@endsection
