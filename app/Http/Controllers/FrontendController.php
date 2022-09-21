<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index()
    {
        $movies = Movies::all();
        return view('front.index',compact('movies'));
    }
    
    function movieDescription($id)
    {
        $movie = Movies::find($id);
        return view('front.moviesDesc',compact('movie'));
    }
}
