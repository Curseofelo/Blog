<?php

namespace App\Http\Controllers\Movie;

use App\Models\Movie;

class EditController extends BaseController
{
    public function __invoke(Movie $movie)
    {
        return view('movie.edit', compact('movie'));
    }
}
