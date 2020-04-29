@extends('layouts.admin')
@section('content')
    <div class="card border-dark">
        <div class="card-header bg-dark text-light">
            <h3>Agregar Noticias</h3>
        </div>
        <form method="POST" action="{{url('/news/create')}}">
            <div class="card-body">
                @csrf
                <div class="row">
                <div class="col-9 bg-dark form-group">
                    <textarea class="ckeditor" name="description" id="editor1" rows="20" cols="80">
                        Este es el textarea que es modificado por la clase ckeditor
                    </textarea>
                </div>
                <div class="form-row col-3 form-group">
                    <div class="col-12">
                       <input class="form-control" type="text" name="title" placeholder="Titulo de la Noticia">
                    </div>

                    <div class="col-12">
                        <select class="custom-select" name="category">
                            <option>Seleccione una Categoría</option>
                            @foreach($categories as $category)
                                <option>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-12">
                        <select class="custom-select" name="clasification">
                            <option>Seleccione una Clasificación</option>
                            @foreach($clasifications as $clasification)
                                <option>{{$clasification->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-12">
                        <input class="form-control" type="datetime-local" name="publish_date" value="{{$date}}">
                    </div>

                    <div class="col-12">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" name="featured">
                            <label class="custom-control-label" for="customSwitch1">Noticia Destacada</label>
                        </div>
                    </div>
                </div>
                </div>

            </div>
            <div class="card-footer bg-dark text-light text-center">
                <input type="hidden" name="author" value="{{auth()->id()}}">
                <button type="submit" class="btn btn-primary col-3">Agregar</button>
            </div>
        </form>
    </div>

@endsection


