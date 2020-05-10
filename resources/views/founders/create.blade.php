@extends('layouts.admin')
@section('img-background')
    <div class="page-header header-filter" data-parallax="true" style="background-image:url('{{asset('img/multi3.jpg')}}');"></div>
@endsection
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-text card-header-primary">
                <div class="card-text">
                    <h4 class="card-title">Agregar Fundadores</h4>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{url('founder/create')}}">
                    <div class="card-body">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                          <span class="input-group-text">
                                              <i class="fas fa-user"></i>
                                          </span>
                                    </div>
                                    <input type="text" name="name" class="form-control" placeholder="Nombre">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                          <span class="input-group-text">
                                              <i class="fas fa-user"></i>
                                          </span>
                                    </div>
                                    <input type="text" name="first_name" class="form-control" placeholder="Apellido Paterno">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                          <span class="input-group-text">
                                              <i class="fas fa-user"></i>
                                          </span>
                                    </div>
                                    <input type="text" name="last_name" class="form-control" placeholder="Apellido Materno">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Fecha de Nacimiento</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                          <span class="input-group-text">
                                              <i class="fas fa-birthday-cake"></i>
                                          </span>

                                    </div>
                                        <input type="date" class="inputFileHidden form-control" name="birthdate">
                                </div>
                            </div>



                            <div class="form-group col-md-6">
                                <div class="input-group mt-3 pt-1">
                                    <div class="input-group-prepend">
                                          <span class="input-group-text">
                                              <i class="fas fa-venus-mars"></i>
                                          </span>
                                    </div>
                                    <select name="gender" class="form-control selectpicker" data-style="btn btn-link" id="exampleFormControlSelect1">
                                        <option>Genero</option>
                                        <option>Masculino</option>
                                        <option>Femenino</option>
                                        <option>Indefinido</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                          <span class="input-group-text">
                                             <i class="fas fa-envelope-open-text"></i>
                                          </span>
                                    </div>
                                    <input type="email" name="email" class="form-control" placeholder="Correo">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                          <span class="input-group-text">
                                              <i class="fas fa-lock"></i>
                                          </span>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="Contraseña">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                          <span class="input-group-text">
                                              <i class="fas fa-lock"></i>
                                          </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Confirmar Contraseña">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                          <span class="input-group-text">
                                              <i class="fas fa-location-arrow"></i>
                                          </span>
                                    </div>
                                    <input type="text" name="street" class="form-control" placeholder="Calle">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                          <span class="input-group-text">
                                              <i class="fas fa-door-open"></i>
                                          </span>
                                    </div>
                                    <input type="number" name="outdoor_number" class="form-control" placeholder="Número Exterior">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                          <span class="input-group-text">
                                              <i class="fas fa-door-closed"></i>
                                          </span>
                                    </div>
                                    <input type="number" name="interior_number" class="form-control" placeholder="Número Interior">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                          <span class="input-group-text">
                                              <i class="fas fa-map"></i>
                                          </span>
                                    </div>
                                    <input type="text" name="colony" class="form-control" placeholder="Colonia">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                          <span class="input-group-text">
                                              <i class="fas fa-city"></i>
                                          </span>
                                    </div>
                                    <input type="text" name="city" class="form-control" placeholder="Ciudad/Municipio">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                          <span class="input-group-text">
                                              <i class="fas fa-key"></i>
                                          </span>
                                    </div>
                                    <input type="number" name="zip" class="form-control" placeholder="Código Postal">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                          <span class="input-group-text">
                                              <i class="fas fa-mobile"></i>
                                          </span>
                                    </div>
                                    <input type="tel" name="cellphone" class="form-control" placeholder="Celular">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                          <span class="input-group-text">
                                              <i class="fas fa-phone"></i>
                                          </span>
                                    </div>
                                    <input type="tel" name="phone" class="form-control" placeholder="Teléfono">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="footer text-center">
                        <input type="hidden" name="author" value="{{auth()->id()}}">
                        <button type="submit" class="btn btn-primary col-3">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
