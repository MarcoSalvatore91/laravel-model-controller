<?php

namespace App\Http\Controllers;

use App\Model\Movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {

        $movies = Movie::all();

        return view('includes.movies.index', compact('movies'));
    }

    public function show($id)
    {

        $movie = Movie::findOrFail($id);

        return view('includes.movies.show', compact('movie'));
    }
}
