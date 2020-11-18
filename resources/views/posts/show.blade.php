@extends('layouts.app')

@section('content')
<a href="/home" class="btn btn-outline-dark">Zurück</a>
<hr>
<div class="card mb-1 p-5">
    <h1>{{$post->workout}}</h1>
<div class="well">
    <p>{{$post->beschreibung}}
</div>
</div>
<hr>
<table>
    <td><a href="/workouts/{{$post->workout_id}}/edit" class="btn btn-dark">Bearbeiten</a></td>
    <td>
        <form action="{{action('App\Http\Controllers\PostsController@destroy', $post->workout_id) }}" method="post", class="pull-right">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">Delete</button>
        </form>
    </td>
</table>
@endsection