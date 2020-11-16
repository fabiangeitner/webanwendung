@extends('layouts.app')

@section('content')
    <h1>CREATE Workout</h1>
    <div class="container">
        <form action="{{action('App\Http\Controllers\PostsController@store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Traingseinheit</label>
                <input type="text" class="form-control" name="workout">
            </div>
            <div class="form-group">
                <label>Beschreibung</label>
                <input type="text" class="form-control" name="beschreibung">
            </div>
            <button class="btn btn-primary">Erstellen</button>
        </form>
    </div>
@endsection