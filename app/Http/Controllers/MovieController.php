<?php

namespace App\Http\Controllers;
// # diciamoa questio controller di collegarsi al model movie
use App\Models\Movie;
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
