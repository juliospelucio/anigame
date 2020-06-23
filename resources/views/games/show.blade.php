@extends('layouts.app')
@section('content')
<div class="wrapper games">
    <ul>
        <li>Name: {{$game->name}}</li>
        <li>Gender: {{$game->gender}}</li>
        <li>Publisher: {{$game->publisher}}</li>
        <li>Platforms:</li>
        @foreach ($game->platforms as $platform)
            <ul>
                <li>{{strtoupper($platform)}}</li>
            </ul>
        @endforeach
        <li>Score: {{$game->score}}</li>
    </ul>
</div>
@endsection