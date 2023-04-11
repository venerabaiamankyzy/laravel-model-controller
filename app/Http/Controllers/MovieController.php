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
        $movie = Movie::find($id);
        return view('movie-detail', compact('movie'));
    }
}