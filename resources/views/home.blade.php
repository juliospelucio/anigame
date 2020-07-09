@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row text-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body text-center">
                    <div class="alert alert-success" role="alert">
                        <!-- {{ session('status') }} -->
                        Session status
                    </div>What would you like to do?
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 mt-3">
            <div class="card">
                <div class="card-body text-center">
                    <a href="/games">List all games</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-3">
            <div class="card">
                <div class="card-body text-center">
                    <a href="/create">Add a new game</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-3">
            <div class="card">
                <div class="card-body text-center">
                    <a href="/edit/1">Edit a existing game</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-3">
            <div class="card">
                <div class="card-body text-center">
                    <a href>Delete a existing game</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection