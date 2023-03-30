<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function movieList() {
        
        $movies = Movie::all();
        // dd($movies);
        return view('movie-list', compact('movies'));
    }
    public function movieDetail($id) {        
        $movie = Movie::find($id);
        dd($movie);
        return view('movie-detail', compact('movie'));
    }
}