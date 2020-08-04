@extends('layouts.app')

@section('content')
<div id="app" class="container">
    @if (session('mssg'))
    <div class="alert alert-success text-center alert-dismissible" role="alert">
         {{ session('mssg') }}
    </div>
    @endif
    @if ($animes->isEmpty())
    <div class="alert alert-info text-center" role="alert">
        Any animes found yet :/
    </div>
    @else
    <h2 class="text-center">All avaliable animes</h2>
    @endif
    <div class="card-deck">
        <anime-list v-for="anime in {{$animes}}" v-bind:anime="anime" :key="anime.id">
        </anime-list>
    </div>
</div>
@endsection