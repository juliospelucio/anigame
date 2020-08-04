@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-md-5">
            <img src="/img/img-283.svg" alt="game-name" class="img-fluid">
            <div class="d-flex justify-content-start flex-row">
                <a href="/edit/game/{{$game->id}}" class="btn btn-outline-secondary  px-5 m-1">Edit</a>
                <a href="/delete/game/{{$game->id}}" class="btn btn-outline-danger  px-5 m-1" data-toggle="modal"
                    data-target="#deleteModal">Delete</a>
            </div>
        </div>
        <div class="col-md-6 my-sm-3">
            <ul class="list-group">
                <li class="list-group-item list-group-item-dark"><span class="item-label">Name:</span> {{$game->name}}
                </li>
                <li class="list-group-item list-group-item-dark"><span class="item-label">Gender:</span>
                    {{$game->gender}}</li>
                <li class="list-group-item list-group-item-dark"><span class="item-label">Publisher:</span>
                    {{$game->publisher}}</li>
                <li class="list-group-item list-group-item-dark"><span class="item-label">Platforms:</span></li>
                @foreach ($game->platforms as $platform)
                <ul class="col-md my-sm-3">
                    <li class="list-group-item list-group-item-dark">{{strtoupper($platform)}}</li>
                </ul>
                @endforeach
                <li class="list-group-item list-group-item-dark"><span class="item-label">Score:</span> {{$game->score}}
                </li>
            </ul>
        </div>
    </div>
    <delete-modal game-name="{{$game->name}}" game-id="{{$game->id}}"></delete-modal>
</div>
@endsection