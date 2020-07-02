@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($games as $game)
        <div class="col-4 my-2">
            <div class="card" style="width: 18rem;">
                {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                <div class="card-body">
                    <h5 class="card-title"><a href="/games/{{$game->id}}">{{$game->name}}</a></h5>
                    <p class="card-text">Jogo do {{$game->name}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#" class="card-link">Edit</a></li>
                    <li class="list-group-item"><a href="#" class="card-link">Delete</a></li>
                </ul>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection