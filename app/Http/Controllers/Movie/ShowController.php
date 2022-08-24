<?php

namespace App\Http\Controllers\Movie;

use App\Models\Movie;

class ShowController extends BaseController
{
    public function __invoke(Movie $movie)
    {
        return view('movie.show', compact('movie'));
    }
}
