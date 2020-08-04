@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row text-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body text-center">
                    What would you like to do?
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md mt-3">
            <div class="card">
                <div class="card-body text-center">
                    <a href="/games">List all games</a>
                </div>
            </div>
        </div>
        <div class="col-md mt-3">
            <div class="card">
                <div class="card-body text-center">
                    <<<<<<< HEAD <a href="/create/game">Add a new game</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md mt-3">
            <div class="card">
                <div class="card-body text-center">
                    <a href="/animes">List all Animes</a>
                </div>
            </div>
        </div>
        <div class="col-md mt-3">
            <div class="card">
                <div class="card-body text-center">
                    <a href="/create/anime">Add a new anime</a>
                    =======
                    <a href="/create">Add a new game</a>
                    >>>>>>> 8ea7b71a85cede8985124bcd57e9c19afa4b9832
                </div>
            </div>
        </div>
    </div>
</div>
@endsection