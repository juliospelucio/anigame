@extends('layouts.app')

@section('content')
<div class="wrapper games">
    <ul>
        @foreach($games as $game)
        <li style="font-weight: 900;">Name: <a href="/games/{{$game->id}}">{{$game->name}}</a></li>
        <li>Gender: {{$game->gender}}</li>
        <li>Publisher: {{$game->publisher}}</li>
        <li>Platforms:</li>
        <ul>
            @foreach($game->platforms as $platform)
            <li>{{$platform}}</li>
            @endforeach
        </ul>
        <li>Score: {{$game->score}}</li>
        @endforeach
    </ul>
</div>
@endsection