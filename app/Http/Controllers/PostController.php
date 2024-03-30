<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function proyects()
    {
        return view('post.proyects');
    }

    public function create()
    {
        return view('post.create');
    }

    public function show($post)
    {

        return view('post.show', compact('post'));
    }
}
