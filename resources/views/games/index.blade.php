@extends('layouts.app')

@section('content')
<div id="app" class="container">
    @if (session('mssg'))
    <div class="alert alert-success text-center alert-dismissible" role="alert">
         {{ session('mssg') }}
    </div>
    @endif
    @if ($games->isEmpty())
    <div class="alert alert-info text-center" role="alert">
        Any games found yet :/
    </div>
    @else
    <h2 class="text-center">All avaliable games</h2>
    @endif
    <div class="card-deck">
        <game-list v-for="game in {{$games}}" v-bind:game="game" :key="game.id">
        </game-list>
    </div>
</div>
@endsection