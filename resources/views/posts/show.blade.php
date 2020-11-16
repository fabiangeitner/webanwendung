@extends('layouts.app')

@section('content')
<a href="/home" class="btn btn-dark">Zurück</a>
<hr>
<div class="card mb-1 p-5">
    <h1>{{$post->workout}}</h1>
<div class="well">
    <p>{{$post->beschreibung}}
</div>
<small>Erstellt am {{$post->created_at}}</small>
</div>
<hr>
<a href="/workouts/{{$post->workout_id}}/edit" class="btn btn-light">Bearbeiten</a>

<form action="{{action('App\Http\Controllers\PostsController@destroy', $post->workout_id) }}" method="post", class="pull-right">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-outline-danger">Delete</button>
</form>
@endsection