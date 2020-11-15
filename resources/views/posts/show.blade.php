@extends('layouts.app')

@section('content')
<a href="/workouts" class="btn btn-default">Zurück</a>
<div class="card mb-4 shadow-sm">
    <h1>{{$post->workout}}</h1>
<small>Erstellt am {{$post->created_at}}</small>
<div class="well">
    {{$post->beschreibung}}
</div>
</div>
<hr>
<a href="/workouts/{{$post->workout_id}}/edit" class="btn btn-default">Bearbeiten</a>

<form action="{{action('App\Http\Controllers\PostsController@destroy', $post->workout_id) }}" method="post", class="pull-right">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
@endsection