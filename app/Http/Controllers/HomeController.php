<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home.index');
    }
}

class ServicesController extends Controller
{
    public function __invoke()
    {
        return view('home.services');
    }
}
