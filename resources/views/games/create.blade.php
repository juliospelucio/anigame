@extends('layouts.app')

@section('content')
<div class=" container wrapper create-game">
    <h1>Create Game</h1>
    <form action="/create/game" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" id="gender" name="gender" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="publisher">Publisher</label>
            <input type="text" id="publisher" name="publisher" class="form-control" required>
        </div>
        <label>Platforms</label><br>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="platforms[]" value="ps" id="ps">
            <label class="form-check-label" for="ps">
                Playstation
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="platforms[]" value="xbox" id="xbox">
            <label class="form-check-label" for="xbox">
                Xbox
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="platforms[]" value="pc" id="pc">
            <label class="form-check-label" for="pc">
                PC
            </label>
        </div>
        <div class="form-group">
            <label for="score">Score</label>
            <input type="number" min="0" max="9.9" step="0.1" id="score" name="score" class="form-control" required>
        </div>

        <input type="submit" value="Save game" class="btn btn-secondary">
    </form>
</div>
@endsection