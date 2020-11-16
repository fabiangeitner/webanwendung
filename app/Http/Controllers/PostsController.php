<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workouts = Post::orderBy('created_at', 'asc')->paginate(10);             //asc -> aufsteigend sortieren
        return view('posts.index')->with('workouts', $workouts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'workout'=>'required'
        ]);
        //neuen Eintrag erstellen
        $post = new Post;
        $post->workout = $request->input('workout');
        $post->beschreibung = $request->input('beschreibung');
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/home')->with('success', 'Trainingseinheit erfolgreich erstellt!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = POST::find($id);
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'workout'=>'required'
        ]);
        //neuen Eintrag erstellen
        $post = Post::find($id);
        $post->workout = $request->input('workout');
        $post->beschreibung = $request->input('beschreibung');
        $post->save();

        return redirect('/home')->with('success', 'Trainingseinheit erfolgreich geändert!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/home')->with('success', 'Trainingseinheit erfolgreich gelöscht!');
    }
}
