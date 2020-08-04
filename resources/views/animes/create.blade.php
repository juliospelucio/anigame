@extends('layouts.app')

@section('content')
<div class=" container wrapper create-anime">
    <h1>Create Anime</h1>
    <form action="/create/anime" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" id="author" name="author" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="episodes">Episodes</label>
            <input type="number" min="1" id="episodes" name="episodes" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="score">Score</label>
            <input type="number" min="0" max="9.9" step="0.1" id="score" name="score" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input type="date" id="year" name="year" class="form-control" required>
        </div>
        <input type="submit" value="Save anime" class="btn btn-secondary">
    </form>
</div>
@endsection