@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <h4 class="font-weight-bold">Noticias</h4>
                </div>
                <div class="col-6">
                    <button class="btn btn-primary float-right"><i class="fas fa-plus"></i> Agregar</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table text-center">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Fecha de Edición</th>
                    <th scope="col">Destacada</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Calsificación</th>
                    <th scope="col">Imagenes</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>The las of Us Part II Retrasado</td>
                    <td><button class="btn btn-warning"><i class="fas fa-eye"></i></button></td>
                    <td>pank9605</td>
                    <td>23/04/2020 14:39:00</td>
                    <td>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch">
                            <label class="custom-control-label" for="customSwitch"></label>
                        </div>
                    </td>
                    <td>Playstation</td>
                    <td>Noticia</td>
                    <td><button class="btn btn-success"><i class="fas fa-image"></i></button></td>
                    <td><button class="btn btn-secondary"><i class="fas fa-edit"></i></button> </td>
                    <td><button class="btn btn-danger"><i class="fas fa-trash"></i></button></td>
                </tr>

                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <h4 class="font-weight-bold">Noticias</h4>
                </div>
                <div class="col-6">
                    <button class="btn btn-primary float-right"><i class="fas fa-plus"></i> Agregar</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table text-center">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Fecha de Edición</th>
                    <th scope="col">Destacada</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Calsificación</th>
                    <th scope="col">Imagenes</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>The las of Us Part II Retrasado</td>
                    <td><button class="btn btn-warning"><i class="fas fa-eye"></i></button></td>
                    <td>pank9605</td>
                    <td>23/04/2020 14:39:00</td>
                    <td>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch">
                            <label class="custom-control-label" for="customSwitch"></label>
                        </div>
                    </td>
                    <td>Playstation</td>
                    <td>Noticia</td>
                    <td><button class="btn btn-success"><i class="fas fa-image"></i></button></td>
                    <td><button class="btn btn-secondary"><i class="fas fa-edit"></i></button> </td>
                    <td><button class="btn btn-danger"><i class="fas fa-trash"></i></button></td>
                </tr>

                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
