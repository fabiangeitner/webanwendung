@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Trainingsplan') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>Deine Trainingseinheiten</h2>
                    <a class="btn btn-outline-primary" href="/workouts/create">Trainingseinheit erstellen</a>
                    
                    <table class="table table-striped">
                        <tr>
                            <th>Titel</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                        <td>{{$post->workout}}</td>
                        <td><a href="/workouts/{{$post->workout_id}}/edit" class="btn btn-default">Bearbeiten</a></td>
                        <td><form action="{{action('App\Http\Controllers\PostsController@destroy', $post->workout_id) }}" method="post", class="pull-right">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
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
