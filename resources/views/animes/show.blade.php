@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-md-4">
            <div class="d-flex justify-content-center">
                <img src="/img/img-283.svg" alt="anime-name" class="img-fluid w-50">
            </div>
            <div class="d-flex justify-content-center mt-2">
                <a href="/edit/anime/{{$anime->id}}" class="btn btn-outline-secondary  px-5 m-1">Edit</a>
                <a href="/delete/anime/{{$anime->id}}" class="btn btn-outline-danger  px-5 m-1" data-toggle="modal"
                    data-target="#deleteModal">Delete</a>
            </div>

        </div>
        <div class="col-md-6 my-sm-3">
            <ul class="list-group">
                <li class="list-group-item list-group-item-dark"><span class="item-label">Name:</span>
                    {{$anime->name}}
                </li>
                <li class="list-group-item list-group-item-dark"><span class="item-label">Author:</span>
                    {{$anime->author}}
                </li>
                <li class="list-group-item list-group-item-dark"><span class="item-label">Episodes:</span>
                    {{$anime->episodes}}
                </li>
                <li class="list-group-item list-group-item-dark"><span class="item-label">Score:</span>
                    {{$anime->score}}
                </li>
                <li class="list-group-item list-group-item-dark"><span class="item-label">Year:</span>
                    {{date('d/m/Y', strtotime($anime->year))}}
                </li>
            </ul>
        </div>
    </div>
    <delete-modal modal-name="{{$anime->name}}" modal-id="{{$anime->id}}" modal-type="anime"></delete-modal>
</div>
@endsection