<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $title = "Fitness-Plan 24/7";
        return view('index')->with('title', $title);
    }
}
