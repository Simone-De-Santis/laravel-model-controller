<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function index()
    {
        $movies = [];
        return view('pages/movies', compact('movies'));
    }
}
