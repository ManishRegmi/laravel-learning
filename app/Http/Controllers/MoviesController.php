<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    function movies()
    {
        $movies = Movies::all();
        return view('movies.index',compact('movies'));
    }

    function create(Request $request)
    {
        $movie = new Movies();
        $movie->movie_name = $request->movie_name;
        $movie->movie_release_date = $request->movie_release_date;
        $movie->movie_director_name = $request->movie_director_name;
        $movie->movie_description = $request->movie_description;
        $movie->movie_trailer = $request->movie_trailer;
        if($request->hasFile('movie_cover_image'))
        {
            $trailer_image = $request->file('movie_cover_image');
            $trailer_image_new_name = time().$trailer_image->getClientOriginalName();
            $trailer_image->move('images/movie_traile_images/',$trailer_image_new_name);
        }
        $movie->movie_cover_image = 'images/movie_traile_images/'.$trailer_image_new_name;
        $movie->save();

        return redirect()->back();
    }
}
