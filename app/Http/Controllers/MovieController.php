<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function movieList() {
        
        $movies = Movie::all();
        return view('movie-list', compact('movies'));
    }
    
    public function movieDetail($id) {        
        $movie = Movie::findOrFail($id);
        // if(!$movie) abort(404);
        return view('movie-detail', compact('movie'));
    }
}