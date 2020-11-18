@extends('layouts.app')

@section('content')
    <h1>Trainingseinheit bearbeiten</h1>
    <div class="container">
        <form action="{{action('App\Http\Controllers\PostsController@update', $post->workout_id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Traingseinheit</label>
                <input type="text" class="form-control" name="workout" value={{old('workout', $post->workout)}}>
            </div>
            <div class="form-group">
                <label>Beschreibung</label>
                <input type="text" class="form-control" name="beschreibung" value={{old('beschreibung', $post->beschreibung)}}>
            </div>
            <button class="btn btn-primary">Erstellen</button>
        </form>
        <form>
    </div>
@endsection