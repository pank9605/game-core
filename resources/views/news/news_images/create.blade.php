@extends('layouts.admin')
@section('img-background')
    <div class="page-header header-filter" data-parallax="true" style="background-image:url('{{asset('img/preba.jpg')}}');"></div>
@endsection
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-text card-header-primary">
                <div class="card-text">
                    <h4 class="card-title">Agregar Imagen</h4>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{url('/staff/news/images/create')}}" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        <div class="row">
                            <div class="col-12 form-group">
                                <input type="file" name="image"></input>
                            </div>

                        </div>
                    </div>
            </div>
        </div>
        <div class="footer text-center">
            <button type="submit" class="btn btn-primary">Agregar</button>
        </div>
        </form>
    </div>
    </div>
    </div>

@endsection








