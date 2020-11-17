@extends('layouts.app')

@section('content')
    <div class="cover-container mt-5 row">
        <div class="col-5">
            <img src="img/fitnessstudio.jpg" alt="Fitnessstudio">
        </div>
        <div class="col-7 bg-light mt-0 pt-5 pl-5 pr-5">
            <h1 class="display-4 text-info">{{$title}}</h1><br>
            <p>Starte deine Reise mit der Fitness-App 24/7! <br><br> Erstelle deine eigenen Trainingseinheiten und verbessere deine Leistungsfähigkeit. <br><br> Du hast die volle Flexibilität: Trainiere zu Hause, im Freien oder im Fitnessstudio — speichere dir deine Trainingseinheiten in deinem digitalen Plan.<br><br></p>
            <p class="mb-0"><a class="btn btn-dark" href="/login" role="button">Login</a> <a class="btn btn-outline-primary" href="/register" role="button">Register</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <img src="img/sportler.jpg" alt="Sportler">
        </div>
        <div class="col-6">
            <img src="img/sportlerin.jpg" alt="Sportlerin">
    </div>
    </div>

@endsection
