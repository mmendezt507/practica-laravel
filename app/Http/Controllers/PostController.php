<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts = [];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = session('posts', []);
        return view("posts.index", ["posts"=> $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //session()->put('posts', []);
        //dd($request->all());
        $posts = session('posts', []);
        $id = count($posts) + 1;
        $posts[] = [
            "id"=> $id,
            "title"=> $request->title,
            "content"=> $request->body,
        ];
        session()->put('posts', $posts);

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts = session('posts', []);
        $position = $id-1;
        return view('posts.show', ['id'=> $posts[$position]['id'],'title'=> $posts[$position]['title'],'content'=> $posts[$position]['content']]);
    }


}
