@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row text-center">
        @if(session('mssg'))
        <div class="alert alert-primary" role="alert">
            {{ session('mssg') }}
        </div>
        @endif
        {{-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div> --}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body text-center">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    What would you like to do?
                </div>
            </div>
        </div>
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
                    <a href="">Delete a existing game</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection