@extends('app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>Starte deine Reise mit der Fitness-App! Erstelle Trainingseinheiten und verbessere deine Leistungsfähigkeit. Mach mit!</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
@endsection
