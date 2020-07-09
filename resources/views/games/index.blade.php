@extends('layouts.app')

@section('content')
<div id="app" class="container">
    <div class="row">
        <game-list v-for="game in {{$games}}" v-bind:game="game" :key="game.id">
        </game-list>
    </div>
</div>
@endsection