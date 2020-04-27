@extends('layouts.admin')
@section('content')
    <div class="card border-dark">
        <div class="card-header">
            <h3>Agregar Fundadores</h3>
        </div>
        <form method="POST" action="{{url('/admin/founder/create')}}">
            <div class="card-body">

                {{csrf_field()}}
                <div class="form-row">
                    <div class="form-group input-group col-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" name="name" id="" placeholder="Nombre">
                    </div>

                    <div class="form-group input-group col-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" name="first_name" id="" placeholder="Apellido Paterno">
                    </div>

                    <div class="form-group input-group col-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" name="last_name" id="" placeholder="Apellido Materno">
                    </div>

                    <div class="form-group input-group col-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light"><i class="fas fa-birthday-cake"></i></span>
                        </div>
                        <input type="number" min="18" max="60" class="form-control" name="age" id="" placeholder="Edad">
                    </div>

                    <div class="form-group input-group col-6">
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

                    <div class="form-group input-group col-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light"><i class="fas fa-envelope-open-text"></i></span>
                        </div>
                        <input type="email" class="form-control" name="email" id="" placeholder="Correo">
                    </div>

                    <div class="form-group input-group col-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" name="password" id="" placeholder="Contraseña">
                    </div>

                    <div class="form-group input-group col-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" name="confirm_password" id="" placeholder="Confirmar Contraseña">
                    </div>


                    <div class="form-group input-group col-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light"><i class="fas fa-location-arrow"></i></span>
                        </div>
                        <input type="text" class="form-control" name="street" id="" placeholder="Calle">
                    </div>

                    <div class="form-group input-group col-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light"><i class="fas fa-door-closed"></i></span>
                        </div>
                        <input type="number" min="1" class="form-control" name="outdoor_number" id="" placeholder="Numero Exterior">
                    </div>

                    <div class="form-group input-group col-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light"><i class="fas fa-door-open"></i></span>
                        </div>
                        <input type="number" min="0" class="form-control" name="interior_number" id="interior_number" placeholder="Numero Interior">
                    </div>

                    <div class="form-group input-group col-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light"><i class="fas fa-map-marked-alt"></i></span>
                        </div>
                        <input type="text" class="form-control" name="colony" id="colony" placeholder="Colonia">
                    </div>

                    <div class="form-group input-group col-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light"><i class="fas fa-city"></i></span>
                        </div>
                        <input type="text" class="form-control" name="city" id="city" placeholder="Ciudad / Municipio">
                    </div>

                    <div class="form-group input-group col-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="number" class="form-control" name="post_code" id="post_code" placeholder="Codigo Postal">
                    </div>

                    <div class="form-group input-group col-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light"><i class="fas fa-mobile-alt"></i></span>
                        </div>
                        <input type="tel" class="form-control" name="cellphone" id="cellphone" placeholder="Celular">
                    </div>
                    <div class="form-group input-group col-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Telefono">
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary col-3">Agregar</button>
            </div>
        </form>
    </div>
@endsection
