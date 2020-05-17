@extends('layouts.app')

@section('img-background')
    <div class="page-header header-filter" data-parallax="true" style="background-image:url('{{$author->cover_image_url}}');"></div>
@endsection
@section('page-description')
    <div class="description text-center">
        <p>{{$author->description}}</p>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3 ml-auto mr-auto">
            <div class="profile">
                <div class="avatar cont">
                    <img src="{{$author->porfile_image_url}}" alt="Circle Image" class="img-edit-porfile img-raised rounded-circle img-fluid">
                </div>
                <div class="name">
                    <h3 class="title">{{$author->name}} {{$author->first_name}} {{$author->last_name}}</h3>
                    <h6>{{$author->role->name}}</h6>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
@endsection
