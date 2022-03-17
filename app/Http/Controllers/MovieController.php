<?php

namespace App\Http\Controllers;

use App\Model\Movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {

        $movies = Movie::all();

        return view('layouts.home', compact('movies'));
    }
}
