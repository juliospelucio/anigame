@extends('layouts.app')

@section('content')
<div class=" container wrapper create-game">
    <h1>Create Game</h1>
    <form action="/edit/game/{{$game->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required value="{{$game->name}}">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="gender" id="gender" name="gender" class="form-control" required value="{{$game->gender}}">
        </div>
        <div class="form-group">
            <label for="publisher">Publisher</label>
            <input type="publisher" id="publisher" name="publisher" class="form-control" required
                value="{{$game->publisher}}">
        </div>
        <label>Platforms</label><br>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="platforms[]" value="ps" id="ps"
                {{ in_array('ps', $game->platforms) ? 'checked' : ''}}>
            <label class="form-check-label" for="ps">
                Playstation
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="platforms[]" value="xbox" id="xbox"
                {{ in_array('xbox', $game->platforms) ? 'checked' : ''}}>
            <label class="form-check-label" for="xbox">
                Xbox
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="platforms[]" value="pc" id="pc"
                {{ in_array('pc', $game->platforms) ? 'checked' : ''}}>
            <label class="form-check-label" for="pc">
                PC
            </label>
        </div>
        <div class="form-group">
            <label for="score">Score</label>
            <input type="number" min="0" max="9.9" step="0.1" id="score" name="score" class="form-control" required value="{{$game->score}}">
        </div>

        <input type="submit" value="Edit game" class="btn btn-secondary">
    </form>
</div>
@endsection