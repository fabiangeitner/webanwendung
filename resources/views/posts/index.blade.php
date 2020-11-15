@extends('app')

@section('content')
    <h1>Posts</h1>
    @if (count($workouts)>0)
        @foreach ($workouts as $post)
            <div class="card mb-4 shadow-sm">
            <h3><a href="/workouts/{{$post->workout_id}}">{{$post->workout}}</a></h3>
            <small>Erstellt am {{$post->created_at}}</small>
            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
@endsection