@extends('layouts.app')

@section('content')
<div class=" container wrapper create-game">
    <h1>Create Game</h1>
    <form action="/create/game" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" required>
        </div>
        @error('name')
        <div class="alert alert-danger" role="alert">
            {{ $errors->first('name') }}
        </div>
        @enderror
        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" id="gender" name="gender" value="{{old('gender')}}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="publisher">Publisher</label>
            <input type="text" id="publisher" name="publisher" value="{{old('publisher')}}" class="form-control" required>
        </div>
        {{old('platforms.0')}}
        <label>Platforms</label><br>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="platforms[]" value="ps" id="ps" {{ (is_array(old('platforms')) and in_array('ps', old('platforms'))) ? ' checked' : '' }}>
            <label class="form-check-label" for="ps">
                Playstation
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="platforms[]" value="xbox" id="xbox" {{ (is_array(old('platforms')) and in_array('xbox', old('platforms'))) ? ' checked' : '' }}>
            <label class="form-check-label" for="xbox">
                Xbox
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="platforms[]" value="pc" id="pc" {{ (is_array(old('platforms')) and in_array('pc', old('platforms'))) ? ' checked' : '' }}>
            <label class="form-check-label" for="pc">
                PC
            </label>
        </div>
        <div class="form-group">
            <label for="score">Score</label>
            <input type="number" min="0" max="9.9" step="0.1" id="score" name="score" value="{{old('score')}}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image">Choose Image</label>
            <input id="image" type="file" name="image" class="@error('name') is-invalid @enderror">
        </div>
        @error('image')
        <div class="alert alert-danger" role="alert">
            {{ $errors->first('image') }}
        </div>
        @enderror
        <input type="submit" value="Save game" class="btn btn-secondary">
    </form>
</div>
@endsection