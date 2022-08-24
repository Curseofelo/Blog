<?php

namespace App\Http\Controllers\Movie;

use App\Models\Movie;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $movies = Movie::all();
        return view('movie.index', compact('movies'));
    }
}
