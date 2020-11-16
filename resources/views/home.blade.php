@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dein Trainingsplan') }}</div>
                <div class="card-body">
                <a class="btn btn-outline-primary" href="/workouts/create">Trainingseinheit erstellen</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>Deine Trainingseinheiten</h2>                    
                    <table class="table">
                        <tr>
                            <th scope="cole">Training</th>
                            <th scope="cole">Beschreibung</th>
                            <th cope="cole"></th>
                            <th cope="cole"></th>
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                        <td><a href="/workouts/{{$post->workout_id}}">{{$post->workout}}</a></td>
                        <td>{{$post->beschreibung}}</td>
                        <td><a href="/workouts/{{$post->workout_id}}/edit" class="btn btn-default">Bearbeiten</a></td>
                        <td><form action="{{action('App\Http\Controllers\PostsController@destroy', $post->workout_id) }}" method="post", class="pull-right">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Entfernen</button>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
